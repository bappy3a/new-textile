<?php

namespace Tests\Feature;

use App\Models\GalleryCategory;
use App\Models\GalleryImage;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\File;
use Tests\TestCase;

class GalleryControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_gallery_form_lists_favorite_categories_first(): void
    {
        $admin = User::factory()->create();
        GalleryCategory::factory()->create(['name' => 'Zebra']);
        GalleryCategory::factory()->favorite()->create(['name' => 'Featured']);

        $response = $this->actingAs($admin)->get(route('gallery.create'));

        $response
            ->assertSee('name="gallery_category_id"', false)
            ->assertSeeInOrder(['Featured (Favorite)', 'Zebra']);
    }

    public function test_admin_can_upload_images_for_a_category(): void
    {
        $admin = User::factory()->create();
        $category = GalleryCategory::factory()->create();

        $response = $this->actingAs($admin)->post(route('gallery.store'), [
            'gallery_category_id' => $category->id,
            'images' => [UploadedFile::fake()->image('fabric.jpg', 600, 400)],
            'is_active' => '1',
            'show_on_home' => '1',
        ]);

        $response
            ->assertRedirect(route('gallery.index'))
            ->assertSessionHasNoErrors();
        $image = GalleryImage::query()->sole();
        $this->assertSame($category->id, $image->gallery_category_id);
        $this->assertTrue($image->is_active);
        $this->assertTrue($image->show_on_home);
        $this->assertFileExists(public_path($image->image));

        File::delete(public_path($image->image));
    }

    public function test_gallery_upload_requires_an_existing_category(): void
    {
        $admin = User::factory()->create();

        $response = $this->actingAs($admin)
            ->from(route('gallery.create'))
            ->post(route('gallery.store'), [
                'gallery_category_id' => 999,
                'images' => [UploadedFile::fake()->image('fabric.jpg')],
            ]);

        $response
            ->assertRedirect(route('gallery.create'))
            ->assertSessionHasErrors([
                'gallery_category_id' => 'The selected gallery category id is invalid.',
            ]);
        $this->assertDatabaseCount('gallery_images', 0);
    }

    public function test_admin_can_change_an_image_category(): void
    {
        $admin = User::factory()->create();
        $originalCategory = GalleryCategory::factory()->create();
        $newCategory = GalleryCategory::factory()->create();
        $image = GalleryImage::create([
            'gallery_category_id' => $originalCategory->id,
            'image' => 'frontend/images/gallery-1.jpg',
            'alt_text' => 'Old description',
            'sort_order' => 1,
            'is_active' => true,
            'show_on_home' => false,
        ]);

        $response = $this->actingAs($admin)->put(route('gallery.update', $image), [
            'gallery_category_id' => $newCategory->id,
            'alt_text' => 'New description',
            'sort_order' => 4,
            'is_active' => '1',
        ]);

        $response
            ->assertRedirect(route('gallery.index'))
            ->assertSessionHasNoErrors();
        $this->assertDatabaseHas('gallery_images', [
            'id' => $image->id,
            'gallery_category_id' => $newCategory->id,
            'alt_text' => 'New description',
            'sort_order' => 4,
        ]);
    }

    public function test_gallery_index_can_be_filtered_by_category(): void
    {
        $admin = User::factory()->create();
        $selectedCategory = GalleryCategory::factory()->create();
        $otherCategory = GalleryCategory::factory()->create();
        GalleryImage::create([
            'gallery_category_id' => $selectedCategory->id,
            'image' => 'frontend/images/gallery-1.jpg',
            'alt_text' => 'Selected category image',
            'is_active' => true,
            'show_on_home' => false,
        ]);
        GalleryImage::create([
            'gallery_category_id' => $otherCategory->id,
            'image' => 'frontend/images/gallery-2.jpg',
            'alt_text' => 'Other category image',
            'is_active' => true,
            'show_on_home' => false,
        ]);

        $this->actingAs($admin)
            ->get(route('gallery.index', ['category' => $selectedCategory->id]))
            ->assertSee('Selected category image')
            ->assertDontSee('Other category image');
    }
}
