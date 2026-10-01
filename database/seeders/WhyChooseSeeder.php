<?php

namespace Database\Seeders;

use App\Models\WhyChooseItem;
use App\Models\WhyChooseSection;
use Illuminate\Database\Seeder;

class WhyChooseSeeder extends Seeder
{
    public function run(): void
    {
        if (! WhyChooseSection::exists()) {
            WhyChooseSection::create([
                'subtitle' => 'Why choose us',
                'title' => 'Setting new standards in textile quality worldwide',
                'image_1' => 'frontend/images/why-choose-image-1-metal.jpg',
                'image_2' => 'frontend/images/why-choose-image-2-metal.jpg',
                'image_3' => 'frontend/images/why-choose-image-3-metal.jpg',
            ]);
        }

        $description = 'We ensure every fabric meets highest standards of durability.';
        $items = [
            ['title' => 'Superior Quality', 'icon' => 'icon-why-choose-item-1-metal.svg'],
            ['title' => 'On-Time Delivery', 'icon' => 'icon-why-choose-item-2-metal.svg'],
            ['title' => 'Custom Solutions', 'icon' => 'icon-why-choose-item-3-metal.svg'],
            ['title' => 'Trusted Service', 'icon' => 'icon-why-choose-item-4-metal.svg'],
        ];

        foreach ($items as $i => $item) {
            WhyChooseItem::updateOrCreate(
                ['title' => $item['title']],
                [
                    'description' => $description,
                    'icon' => 'frontend/images/'.$item['icon'],
                    'sort_order' => $i + 1,
                    'is_active' => true,
                ],
            );
        }
    }
}
