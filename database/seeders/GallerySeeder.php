<?php

namespace Database\Seeders;

use App\Models\GalleryImage;
use App\Models\GallerySection;
use Illuminate\Database\Seeder;

class GallerySeeder extends Seeder
{
    public function run(): void
    {
        if (! GallerySection::exists()) {
            GallerySection::create([
                'subtitle' => 'Our Gallery',
                'title' => 'A closer look at our fabrics and production',
            ]);
        }

        foreach (range(1, 9) as $n) {
            GalleryImage::updateOrCreate(
                ['image' => "frontend/images/gallery-{$n}.jpg"],
                ['alt_text' => "Gallery image {$n}", 'sort_order' => $n, 'is_active' => true, 'show_on_home' => true],
            );
        }
    }
}
