<?php

namespace Database\Factories;

use App\Models\GalleryCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<GalleryCategory>
 */
class GalleryCategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->unique()->words(2, true),
            'is_favorite' => false,
        ];
    }

    public function favorite(): static
    {
        return $this->state(fn (array $attributes): array => [
            'is_favorite' => true,
        ]);
    }
}
