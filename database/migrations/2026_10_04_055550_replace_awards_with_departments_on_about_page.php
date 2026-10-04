<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::table('about_page_items')->where('section', 'awards')->delete();
        DB::table('about_page_sections')->where('key', 'awards')->delete();

        $now = now();

        if (! DB::table('about_page_sections')->where('key', 'departments')->exists()) {
            DB::table('about_page_sections')->insert([
                'key' => 'departments',
                'title' => 'Our Department',
                'description' => 'Our specialized departments work together to turn quality fibers into reliable, beautifully finished textiles.',
                'is_active' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ]);
        }

        if (! DB::table('about_page_items')->where('section', 'departments')->exists()) {
            DB::table('about_page_items')->insert([
                [
                    'section' => 'departments',
                    'type' => 'department',
                    'title' => 'Spinning Department',
                    'description' => 'Transforms carefully selected fibers into consistent, high-quality yarn for dependable fabric production.',
                    'sort_order' => 1,
                    'is_active' => true,
                    'created_at' => $now,
                    'updated_at' => $now,
                ],
                [
                    'section' => 'departments',
                    'type' => 'department',
                    'title' => 'Weaving Department',
                    'description' => 'Combines modern machinery and skilled craftsmanship to create precise, durable fabric constructions.',
                    'sort_order' => 2,
                    'is_active' => true,
                    'created_at' => $now,
                    'updated_at' => $now,
                ],
                [
                    'section' => 'departments',
                    'type' => 'department',
                    'title' => 'Dyeing & Finishing',
                    'description' => 'Delivers accurate color, texture, and performance finishes while maintaining consistent quality.',
                    'sort_order' => 3,
                    'is_active' => true,
                    'created_at' => $now,
                    'updated_at' => $now,
                ],
                [
                    'section' => 'departments',
                    'type' => 'department',
                    'title' => 'Quality Control',
                    'description' => 'Inspects every production stage to ensure each fabric meets our standards and customer requirements.',
                    'sort_order' => 4,
                    'is_active' => true,
                    'created_at' => $now,
                    'updated_at' => $now,
                ],
            ]);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::table('about_page_items')->where('section', 'departments')->delete();
        DB::table('about_page_sections')->where('key', 'departments')->delete();

        $now = now();

        DB::table('about_page_sections')->insert([
            'key' => 'awards',
            'subtitle' => 'Awards',
            'title' => 'Honored for excellence in textile manufacturing',
            'description' => "Our journey in the textile industry has been marked by innovation, dedication, and excellence. Over the years, we've been honored with numerous awards and recognitions.",
            'button_text' => 'contact us',
            'button_url' => 'contact-us',
            'is_active' => true,
            'created_at' => $now,
            'updated_at' => $now,
        ]);
    }
};
