<?php

namespace Database\Seeders;

use App\Models\Slider;
use Illuminate\Database\Seeder;

class SliderSeeder extends Seeder
{
    public function run(): void
    {
        $sliders = [
            [
                'subtitle' => 'Welcome to Textile Industry',
                'title' => 'Redefining excellence through modern textile innovation',
                'description' => 'We combine advanced technology, skilled craftsmanship, and sustainable practices to create high-quality fabrics that set new benchmarks in the global textile industry.',
                'button_text' => 'Begin Your Fabric Journey',
                'button_url' => 'contact',
                'image' => 'frontend/images/hero-bg-image.jpg',
            ],
            [
                'subtitle' => 'Premium Fabric Production',
                'title' => 'Crafting premium fabrics with precision and care',
                'description' => 'From yarn to finished cloth, our modern facilities deliver consistent quality, durability, and finish for brands around the world.',
                'button_text' => 'Explore Our Services',
                'button_url' => 'services',
                'image' => 'frontend/images/hero-bg-image-metal.jpg',
            ],
            [
                'subtitle' => 'Sustainable Manufacturing',
                'title' => 'Sustainable textiles built for a better tomorrow',
                'description' => 'We invest in eco-friendly processes and responsible sourcing so every meter we produce respects people and the planet.',
                'button_text' => 'Get a Free Quote',
                'button_url' => 'contact',
                'image' => 'frontend/images/hero-image-stone.jpg',
            ],
        ];

        foreach ($sliders as $i => $slider) {
            Slider::updateOrCreate(
                ['title' => $slider['title']],
                $slider + ['sort_order' => $i + 1, 'is_active' => true],
            );
        }
    }
}
