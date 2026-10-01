<?php

namespace Database\Seeders;

use App\Models\AboutPageItem;
use App\Models\AboutPageSection;
use Illuminate\Database\Seeder;

class AboutPageSeeder extends Seeder
{
    private const IMG = 'frontend/images/';

    public function run(): void
    {
        foreach ($this->sections() as $key => $data) {
            if (! AboutPageSection::where('key', $key)->exists()) {
                AboutPageSection::create(['key' => $key, ...$data]);
            }
        }

        foreach ($this->items() as $section => $items) {
            foreach ($items as $i => $item) {
                AboutPageItem::updateOrCreate(
                    ['section' => $section, 'type' => $item['type'], 'title' => $item['title']],
                    [...$item, 'sort_order' => $i + 1, 'is_active' => true],
                );
            }
        }
    }

    private function sections(): array
    {
        return [
            'about' => [
                'subtitle' => 'About Our Company',
                'title' => 'Innovative textile solutions for a stylish tomorrow',
                'description' => 'We blend creativity, technology, and craftsmanship to produce premium textiles that set new standards in quality and design.',
                'image_1' => self::IMG.'about-us-image-1.jpg',
                'image_2' => self::IMG.'about-us-image-2.jpg',
                'image_3' => self::IMG.'about-counter-image.png',
                'button_text' => 'Contact now',
                'button_url' => 'contact-us',
                'contact_label' => 'Need Any Help?',
                'contact_phone' => '+(123) 456-789',
            ],
            'approach' => [
                'subtitle' => 'Our Approach',
                'title' => 'What makes us your trusted textile partner',
                'description' => 'We take pride in being a trusted name in the textile industry, known for our commitment to quality, innovation, and sustainability. Our team blends advanced technology with years of expertise.',
                'image_1' => self::IMG.'approach-image-1.png',
                'image_2' => self::IMG.'approach-image-2.jpg',
            ],
            'why_choose' => [
                'subtitle' => 'Why Choose Us',
                'title' => 'Turning quality into a tradition you can trust',
                'description' => 'Our clients choose us not only for the quality they see but for the consistency and integrity woven into every thread we create.',
                'image_1' => self::IMG.'why-choose-us-image.jpg',
                'image_2' => self::IMG.'author-1.jpg',
                'contact_label' => 'Gain Insights from Industry-Leading Textile Experts',
                'contact_phone' => '+(123) 456-789',
            ],
            'what_we_do' => [
                'subtitle' => 'What We Do',
                'title' => 'Where tradition meets modern textile technology',
                'description' => 'Our clients choose us not only for the quality they see but for the consistency and integrity woven into every thread we create.',
                'image_1' => self::IMG.'what-we-do-image.jpg',
            ],
            'awards' => [
                'subtitle' => 'Awards',
                'title' => 'Honored for excellence in textile manufacturing',
                'description' => "Our journey in the textile industry has been marked by innovation, dedication, and excellence. Over the years, we've been honored with numerous awards and recognitions.",
                'button_text' => 'contact us',
                'button_url' => 'contact-us',
            ],
            'faqs' => [
                'subtitle' => 'Frequently Asked Questions',
                'title' => 'Everything you need to know about textile',
                'description' => 'From product details to production techniques, our FAQ section helps you quickly find the information you need.',
                'button_url' => 'contact-us',
            ],
        ];
    }

    private function items(): array
    {
        $awardText = 'Each product reflects precision, care, and a dedication to delivering unmatched value to our clients, we combine.';
        $faqText = 'Yes, we offer complete customization services. You can choose the fabric type, color, pattern, weight, and finish. Our design and R&D team works closely with clients to develop unique fabrics that meet specific needs.';

        return [
            'about' => [
                ['type' => 'list', 'title' => 'Advanced Weaving Technology'],
                ['type' => 'list', 'title' => 'Sustainable Production Practices'],
                ['type' => 'list', 'title' => 'Experienced Craftsmanship Team'],
                ['type' => 'rating', 'title' => '1K+ Reviews On Trustpilot', 'number' => '4.9', 'suffix' => '(Ratings)'],
                ['type' => 'feature', 'title' => 'Cutting-Edge Dyeing Techniques', 'icon' => self::IMG.'icon-about-item-1.svg'],
                ['type' => 'feature', 'title' => 'Collaborative Design Partnerships', 'icon' => self::IMG.'icon-about-item-2.svg'],
            ],
            'approach' => [
                ['type' => 'counter', 'title' => 'Skilled Designer', 'number' => '100', 'suffix' => '+', 'icon' => self::IMG.'icon-approach-counter-1.svg'],
                ['type' => 'feature', 'title' => 'Our Mission', 'icon' => self::IMG.'icon-mission.svg',
                    'description' => 'We blend creativity, technology, and craftsmanship to produce premium textiles that set new standards in quality and design.'],
                ['type' => 'feature', 'title' => 'Our Vision', 'icon' => self::IMG.'icon-vision.svg',
                    'description' => 'Our production process is built on the foundation of environmental responsibility and resource efficiency. We use eco-friendly materials, low-impact dyes.'],
            ],
            'why_choose' => [
                ['type' => 'list', 'title' => 'Every fabric is crafted with precision'],
                ['type' => 'list', 'title' => 'Decades of experience in woven detail'],
                ['type' => 'counter', 'label' => 'Our Expert Team', 'title' => 'Our Team Members', 'number' => '80', 'suffix' => '+',
                    'description' => 'Behind every exceptional fabric is a dedicated team of experts.'],
                ['type' => 'counter', 'label' => 'Happy Customers', 'title' => 'Client Satisfaction Rate', 'number' => '98', 'suffix' => '%',
                    'description' => 'Our commitment to excellence is reflected in the trust.'],
            ],
            'what_we_do' => [
                ['type' => 'feature', 'title' => 'Inconsistent Fabric Quality', 'icon' => self::IMG.'icon-what-we-body-1.svg',
                    'description' => 'Every fabric we produce goes through multiple stages of testing and inspection to ensure durability, consistency, and a flawless finish.'],
                ['type' => 'feature', 'title' => 'Limited Access to Sustainable', 'icon' => self::IMG.'icon-what-we-body-2.svg',
                    'description' => 'Our dedicated R&D team constantly explores new fibers, weaves, and finishes to create fabrics that balance comfort, performance, and sustainability.'],
                ['type' => 'counter', 'title' => 'Years Of Excellence', 'number' => '25', 'suffix' => '+', 'icon' => self::IMG.'icon-what-we-counter-1.svg'],
                ['type' => 'counter', 'title' => 'Meters Of Premium', 'number' => '10', 'suffix' => 'k+', 'icon' => self::IMG.'icon-what-we-counter-2.svg'],
                ['type' => 'counter', 'title' => 'Client Trust by Global', 'number' => '500', 'suffix' => '+', 'icon' => self::IMG.'icon-what-we-counter-3.svg'],
            ],
            'awards' => [
                ['type' => 'award', 'title' => 'Excellence in Textile Innovation Award', 'description' => $awardText, 'icon' => self::IMG.'awards-image-1.svg'],
                ['type' => 'award', 'title' => 'Best Sustainable Fabric Manufacturer', 'description' => $awardText, 'icon' => self::IMG.'awards-image-2.svg'],
                ['type' => 'award', 'title' => 'Global Quality Excellence Award', 'description' => $awardText, 'icon' => self::IMG.'awards-image-3.svg'],
                ['type' => 'award', 'title' => 'Green Manufacture Leadership Award', 'description' => $awardText, 'icon' => self::IMG.'awards-image-4.svg'],
            ],
            'faqs' => [
                ['type' => 'faq', 'title' => 'Can you provide customized fabric designs?', 'description' => $faqText],
                ['type' => 'faq', 'title' => 'Are your manufacturing processes sustainable?', 'description' => $faqText],
                ['type' => 'faq', 'title' => 'How long does it take to manufacture and deliver orders?', 'description' => $faqText],
                ['type' => 'faq', 'title' => 'What types of fabrics do you manufacture?', 'description' => $faqText],
                ['type' => 'faq', 'title' => 'Do you offer samples before bulk production?', 'description' => $faqText],
            ],
        ];
    }
}
