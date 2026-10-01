<?php

namespace Database\Seeders;

use App\Models\Service;
use App\Models\ServiceSection;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        if (! ServiceSection::exists()) {
            ServiceSection::create([
                'subtitle' => 'Our Services',
                'title' => 'Expert fabric design, production, and finishing services',
                'footer_badge' => 'Free',
                'footer_text' => "Let's make something great work together.",
                'footer_link_text' => 'Get Free Quote',
                'footer_link_url' => 'contact',
            ]);
        }

        $description = 'High-quality fabric production using advanced weaving and knitting technology.';
        $services = [
            ['title' => 'Fabric Development', 'icon' => 'icon-services-1-metal.svg'],
            ['title' => 'Custom Fabric Solutions', 'icon' => 'icon-services-2-metal.svg'],
            ['title' => 'Quality Assurance', 'icon' => 'icon-services-3-metal.svg'],
            ['title' => 'Sustainable Production', 'icon' => 'icon-services-4-metal.svg'],
        ];

        foreach ($services as $i => $service) {
            Service::updateOrCreate(
                ['title' => $service['title']],
                [
                    'description' => $description,
                    'icon' => 'frontend/images/'.$service['icon'],
                    'link_url' => 'services',
                    'sort_order' => $i + 1,
                    'is_active' => true,
                ],
            );
        }
    }
}
