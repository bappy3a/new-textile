<?php

namespace Tests\Feature;

use App\Models\AboutPageItem;
use App\Models\AboutPageSection;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AboutPageDepartmentTest extends TestCase
{
    use RefreshDatabase;

    public function test_about_page_renders_active_departments_and_escapes_their_content(): void
    {
        AboutPageSection::query()->where('key', 'departments')->update([
            'title' => 'Our Production Departments',
            'description' => 'Specialists at every stage.',
        ]);
        AboutPageItem::query()->where('section', 'departments')->delete();
        AboutPageItem::create([
            'section' => 'departments',
            'type' => 'department',
            'title' => 'Dyeing <script>alert(1)</script>',
            'description' => 'Precise colors for every fabric.',
            'is_active' => true,
        ]);
        AboutPageItem::create([
            'section' => 'departments',
            'type' => 'department',
            'title' => 'Hidden Department',
            'description' => 'This department should not be shown.',
            'is_active' => false,
        ]);

        $response = $this->get(route('about-us'));

        $response
            ->assertSee('Our Production Departments')
            ->assertSee('Specialists at every stage.')
            ->assertSee('Dyeing &lt;script&gt;alert(1)&lt;/script&gt;', false)
            ->assertSee('Precise colors for every fabric.')
            ->assertSee('department-item', false)
            ->assertDontSee('<script>alert(1)</script>', false)
            ->assertDontSee('Hidden Department')
            ->assertDontSee('Our Awards');
    }

    public function test_department_form_only_displays_title_and_description_fields(): void
    {
        $admin = User::factory()->create();

        $response = $this->actingAs($admin)->get(route('about-page.items.create', ['section' => 'departments']));

        $response
            ->assertSee('name="title"', false)
            ->assertSee('name="description"', false)
            ->assertDontSee('name="type"', false)
            ->assertDontSee('name="label"', false)
            ->assertDontSee('name="number"', false)
            ->assertDontSee('name="suffix"', false)
            ->assertDontSee('name="icon"', false)
            ->assertDontSee('name="sort_order"', false)
            ->assertDontSee('name="is_active"', false)
            ->assertDontSee('name="color"', false);
    }

    public function test_admin_can_create_a_department_with_title_and_description(): void
    {
        $admin = User::factory()->create();
        AboutPageItem::query()->where('section', 'departments')->delete();

        $response = $this->actingAs($admin)->post(route('about-page.items.store'), [
            'section' => 'departments',
            'type' => 'award',
            'title' => 'Research & Development',
            'description' => 'Develops new fibers, finishes, and fabric constructions.',
            'number' => '99',
            'is_active' => '0',
            'color' => '#000000',
        ]);

        $response
            ->assertRedirect(route('about-page.index', ['tab' => 'departments']))
            ->assertSessionHasNoErrors();

        $this->assertDatabaseHas('about_page_items', [
            'section' => 'departments',
            'type' => 'department',
            'title' => 'Research & Development',
            'description' => 'Develops new fibers, finishes, and fabric constructions.',
            'number' => null,
            'sort_order' => 1,
            'is_active' => true,
        ]);
    }
}
