<?php

namespace Database\Seeders;

use App\Models\HeroInfo;
use Illuminate\Database\Seeder;

class HeroInfoSeeder extends Seeder
{
    public function run(): void
    {
        if (HeroInfo::exists()) {
            return;
        }

        HeroInfo::create([
            'image' => 'frontend/images/hero-info-image-metal.jpg',
            'item_title' => 'Customized Textile Solutions',
            'item_text' => "We provide tailor-made fabric designs, textures, and finishes to perfectly match your brand's vision.",
            'counter_1_number' => 25,
            'counter_1_suffix' => '+',
            'counter_1_label' => 'Years of Excellence in Textile Industry',
            'counter_2_number' => 5,
            'counter_2_suffix' => 'K+',
            'counter_2_label' => 'Meters Produced Monthly Textile Innovations',
            'contact_title' => "Let's Weave Success Together - Contact Us Today",
            'contact_email' => 'info@example.com',
            'contact_phone' => '+880 123 456 789',
        ]);
    }
}
