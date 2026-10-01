<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    public function run(): void
    {
        $defaults = [
            'site_logo' => 'frontend/images/logo-dark.svg',
            'footer_logo' => 'frontend/images/footer-logo.svg',
            'favicon' => 'frontend/images/favicon.png',
            'footer_about' => 'We are dedicated to crafting high-quality fabric that combine innovation, sustainability.',
            'social_facebook' => '#',
            'social_x' => '#',
            'social_instagram' => '#',
            'social_pinterest' => '#',
            'social_linkedin' => null,
            'social_youtube' => null,
            'footer_links_title' => 'Quick Links',
            'footer_links' => "Home | /\nAbout Us | about-us\nProducts | products\nContact Us | contact-us",
            'footer_contact_title' => 'Contact Information',
            'footer_phone_label' => 'Need Help!',
            'footer_phone' => '+(123) 456 - 789',
            'footer_email_label' => 'E-mail Us',
            'footer_email' => 'info@domainname.com',
            'footer_address' => '123 Industrial Estate, Textile Park, Mumbai, India',
            'footer_newsletter_title' => 'Subscribe Now!',
            'footer_copyright' => 'Copyright © {year} All Rights Reserved.',
        ];

        // Only add missing keys so re-seeding never overwrites what the admin changed.
        foreach ($defaults as $key => $value) {
            Setting::firstOrCreate(['key' => $key], ['value' => $value]);
        }
    }
}
