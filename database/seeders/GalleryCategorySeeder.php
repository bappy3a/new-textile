<?php

namespace Database\Seeders;

use App\Models\GalleryCategory;
use Illuminate\Database\Seeder;

class GalleryCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        GalleryCategory::updateOrCreate(
            ['name' => 'General'],
            ['is_favorite' => true],
        );
    }
}
