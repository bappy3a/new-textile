<?php

namespace Tests\Feature;

use App\Models\GalleryCategory;
use App\Models\GalleryImage;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProductsPageTest extends TestCase
{
    use RefreshDatabase;

    public function test_header_lists_only_favorite_gallery_categories_as_product_filters(): void
    {
        $favoriteCategory = GalleryCategory::factory()->favorite()->create(['name' => 'Featured Fabrics']);
        GalleryCategory::factory()->create(['name' => 'Hidden Fabrics']);

        $this->get(route('products'))
            ->assertSee('Featured Fabrics')
            ->assertSee(route('products', ['category' => $favoriteCategory->id]), false)
            ->assertDontSee('Hidden Fabrics');
    }

    public function test_products_can_be_filtered_by_gallery_category(): void
    {
        $selectedCategory = GalleryCategory::factory()->favorite()->create(['name' => 'Knitted Fabrics']);
        $otherCategory = GalleryCategory::factory()->favorite()->create();
        $this->createGalleryImage($selectedCategory, 'Selected category product');
        $this->createGalleryImage($otherCategory, 'Other category product');
        $this->createGalleryImage($selectedCategory, 'Inactive selected product', false);

        $this->get(route('products', ['category' => $selectedCategory->id]))
            ->assertSee('Knitted Fabrics')
            ->assertSee('Selected category product')
            ->assertDontSee('Other category product')
            ->assertDontSee('Inactive selected product');
    }

    public function test_filtered_products_are_paginated_and_keep_the_category_filter(): void
    {
        $category = GalleryCategory::factory()->favorite()->create();

        foreach (range(1, 10) as $position) {
            $this->createGalleryImage($category, sprintf('Product %02d', $position), sortOrder: $position);
        }

        $response = $this->get(route('products', ['category' => $category->id]));

        $response
            ->assertSee('Product 01')
            ->assertSee('Product 09')
            ->assertDontSee('Product 10')
            ->assertSee('category='.$category->id.'&amp;page=2', false);

        $this->get(route('products', ['category' => $category->id, 'page' => 2]))
            ->assertSee('Product 10')
            ->assertDontSee('Product 01');
    }

    public function test_products_return_not_found_for_an_unknown_category(): void
    {
        $this->get(route('products', ['category' => 999]))
            ->assertNotFound();
    }

    private function createGalleryImage(
        GalleryCategory $category,
        string $altText,
        bool $isActive = true,
        int $sortOrder = 0,
    ): GalleryImage {
        return GalleryImage::create([
            'gallery_category_id' => $category->id,
            'image' => 'frontend/images/gallery-1.jpg',
            'alt_text' => $altText,
            'sort_order' => $sortOrder,
            'is_active' => $isActive,
            'show_on_home' => false,
        ]);
    }
}
