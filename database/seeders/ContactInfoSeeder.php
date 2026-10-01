<?php

namespace Database\Seeders;

use App\Models\ContactInfo;
use Illuminate\Database\Seeder;

class ContactInfoSeeder extends Seeder
{
    public function run(): void
    {
        if (ContactInfo::exists()) {
            return;
        }

        ContactInfo::create([
            'image' => 'frontend/images/contact-us-img.jpg',
            'working_hours_title' => 'Our Working Hours',
            'working_hours' => "Mon - Sat :- 9:00 AM - 6:00 PM\nSun: Closed",
            'email' => 'support@domain.com',
            'phone' => '+(123) 456-789',
            'address' => '244 Royal Ln Mesa, 45',
            'form_subtitle' => 'Contact Us',
            'form_title' => 'Reach out to our team today',
            'form_description' => "We'd love to hear from you! Whether you're looking for custom fabric development, sustainable textile solutions, or expert guidance on material selection, our team is ready to help.",
            'map_subtitle' => 'Our Location',
            'map_title' => "Reach out and let's weave success together",
            'map_embed_url' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96737.10562045308!2d-74.08535042841811!3d40.739265258395164!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sin!4v1703158537552!5m2!1sen!2sin',
        ]);
    }
}
