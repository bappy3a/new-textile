<?php

namespace Tests\Feature;

use App\Models\GalleryCategory;
use App\Models\GalleryImage;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class GalleryCategoryControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_unauthenticated_user_is_redirected_from_category_management(): void
    {
        $this->get(route('gallery-categories.index'))
            ->assertRedirect(route('login'));
    }

    public function test_admin_can_create_a_favorite_category(): void
    {
        $admin = User::factory()->create();

        $response = $this->actingAs($admin)->post(route('gallery-categories.store'), [
            'name' => 'Featured Fabrics',
            'is_favorite' => '1',
            'unexpected' => 'ignored',
        ]);

        $response
            ->assertRedirect(route('gallery-categories.index'))
            ->assertSessionHasNoErrors();
        $this->assertDatabaseHas('gallery_categories', [
            'name' => 'Featured Fabrics',
            'is_favorite' => true,
        ]);
    }

    public function test_category_name_must_be_unique(): void
    {
        $admin = User::factory()->create();
        GalleryCategory::factory()->create(['name' => 'Knitted Fabrics']);

        $response = $this->actingAs($admin)
            ->from(route('gallery-categories.create'))
            ->post(route('gallery-categories.store'), ['name' => 'Knitted Fabrics']);

        $response
            ->assertRedirect(route('gallery-categories.create'))
            ->assertSessionHasErrors(['name' => 'The name has already been taken.']);
        $this->assertDatabaseCount('gallery_categories', 1);
    }

    public function test_admin_can_update_a_category_and_remove_favorite_status(): void
    {
        $admin = User::factory()->create();
        $category = GalleryCategory::factory()->favorite()->create(['name' => 'Featured']);

        $response = $this->actingAs($admin)->put(route('gallery-categories.update', $category), [
            'name' => 'Seasonal',
        ]);

        $response
            ->assertRedirect(route('gallery-categories.index'))
            ->assertSessionHasNoErrors();
        $this->assertDatabaseHas('gallery_categories', [
            'id' => $category->id,
            'name' => 'Seasonal',
            'is_favorite' => false,
        ]);
    }

    public function test_deleting_a_category_keeps_its_images_uncategorized(): void
    {
        $admin = User::factory()->create();
        $category = GalleryCategory::factory()->create();
        $image = GalleryImage::create([
            'gallery_category_id' => $category->id,
            'image' => 'frontend/images/gallery-1.jpg',
            'sort_order' => 1,
            'is_active' => true,
            'show_on_home' => false,
        ]);

        $response = $this->actingAs($admin)->delete(route('gallery-categories.destroy', $category));

        $response
            ->assertRedirect(route('gallery-categories.index'))
            ->assertSessionHasNoErrors();
        $this->assertModelMissing($category);
        $this->assertDatabaseHas('gallery_images', [
            'id' => $image->id,
            'gallery_category_id' => null,
        ]);
    }

    public function test_category_index_escapes_category_names(): void
    {
        $admin = User::factory()->create();
        GalleryCategory::factory()->create(['name' => '<script>alert(1)</script>']);

        $this->actingAs($admin)
            ->get(route('gallery-categories.index'))
            ->assertSee('&lt;script&gt;alert(1)&lt;/script&gt;', false)
            ->assertDontSee('<script>alert(1)</script>', false);
    }
}
