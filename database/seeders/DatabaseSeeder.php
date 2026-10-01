<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $email = 'bappy@dev.local';
        $user = User::where('email', $email)->first();
        if (! $user) {
            $user = new User;
            $user->name = 'Admin';
            $user->user_type = 'admin';
            $user->email = $email;
            $user->password = Hash::make('password');
            $user->email_verified_at = now();
            $user->save();
        }

        $this->call([SliderSeeder::class, HeroInfoSeeder::class, AboutUsSeeder::class, ServiceSeeder::class, GallerySeeder::class, WhyChooseSeeder::class, AboutPageSeeder::class]);
    }
}
