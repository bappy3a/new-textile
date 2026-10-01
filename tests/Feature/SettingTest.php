<?php

namespace Tests\Feature;

use App\Models\Setting;
use App\Models\User;
use Database\Seeders\ContactInfoSeeder;
use Database\Seeders\SettingSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\File;
use Tests\TestCase;

class SettingTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        $this->seed([SettingSeeder::class, ContactInfoSeeder::class]);
    }

    public function test_footer_and_header_render_from_settings(): void
    {
        $this->get(route('contact-us'))
            ->assertOk()
            ->assertSee('frontend/images/logo-dark.svg')
            ->assertSee('frontend/images/footer-logo.svg')
            ->assertSee('info@domainname.com')
            ->assertSee('123 Industrial Estate, Textile Park, Mumbai, India')
            ->assertSee('Copyright © '.date('Y'), false)
            ->assertSee('fa-facebook-f')
            ->assertDontSee('fa-youtube');
    }

    public function test_admin_can_update_settings_and_upload_logo(): void
    {
        $admin = User::factory()->create();

        $this->actingAs($admin)->get(route('settings.edit'))->assertOk();

        $this->actingAs($admin)->put(route('settings.update'), [
            'footer_email' => 'hello@textile.test',
            'footer_links' => "Home | /\nCatalogue | https://example.com/catalogue",
            'social_youtube' => 'https://youtube.com/@textile',
            'social_facebook' => '',
            'site_logo' => UploadedFile::fake()->image('logo.png', 200, 60),
        ])->assertRedirect(route('settings.edit'))->assertSessionHasNoErrors();

        $logo = Setting::get('site_logo');
        $this->assertStringStartsWith('uploads/settings/site_logo_', $logo);
        $this->assertFileExists(public_path($logo));

        $this->get(route('contact-us'))
            ->assertSee('hello@textile.test')
            ->assertSee('https://example.com/catalogue')
            ->assertSee('fa-youtube')
            ->assertDontSee('fa-facebook-f')
            ->assertSee($logo);

        File::delete(public_path($logo));
    }

    public function test_social_links_must_be_full_urls(): void
    {
        $this->actingAs(User::factory()->create())
            ->put(route('settings.update'), ['social_facebook' => 'javascript:alert(1)'])
            ->assertSessionHasErrors('social_facebook');
    }
}
