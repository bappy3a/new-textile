<?php

namespace Database\Seeders;

use App\Models\AboutUs;
use Illuminate\Database\Seeder;

class AboutUsSeeder extends Seeder
{
    public function run(): void
    {
        if (AboutUs::exists()) {
            return;
        }

        AboutUs::create([
            'image_1' => 'frontend/images/about-us-image-metal-1.jpg',
            'image_2' => 'frontend/images/about-us-image-metal-2.jpg',
            'counter_number' => 25,
            'counter_suffix' => '+',
            'counter_label' => 'Years Of Experience Textile',
            'subtitle' => 'About Us',
            'title' => 'Delivering excellence through textile expertise',
            'description' => 'With years of industry experience, we combine skilled craftsmanship, modern technology, quality materials to produce premium textiles that meet global standards.',
            'item_title' => 'Skilled & Experienced Workforce',
            'button_text' => 'More About Us',
            'button_url' => 'about',
            'contact_label' => 'Need Any Help?',
            'contact_phone' => '+(123) 456-789',
        ]);
    }
}
