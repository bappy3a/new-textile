<?php

namespace Tests\Feature;

use App\Models\ContactMessage;
use App\Models\User;
use Database\Seeders\ContactInfoSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ContactFormTest extends TestCase
{
    use RefreshDatabase;

    private array $payload = [
        'fname' => 'Jane',
        'lname' => 'Doe',
        'phone' => '+880 1700 000000',
        'email' => 'jane@example.com',
        'message' => 'Need a fabric quote.',
    ];

    public function test_contact_page_shows_seeded_info(): void
    {
        $this->seed(ContactInfoSeeder::class);

        $this->get(route('contact-us'))
            ->assertOk()
            ->assertSee('support@domain.com')
            ->assertSee('Sun: Closed')
            ->assertSee('google.com/maps/embed', false);
    }

    public function test_ajax_submission_stores_message(): void
    {
        $this->postJson(route('contact-us.store'), $this->payload)
            ->assertOk()
            ->assertJson(['message' => 'Message Sent Successfully!']);

        $this->assertDatabaseHas('contact_messages', [
            'first_name' => 'Jane',
            'email' => 'jane@example.com',
            'read_at' => null,
        ]);
    }

    public function test_ajax_submission_returns_validation_errors(): void
    {
        $this->postJson(route('contact-us.store'), ['fname' => '', 'email' => 'not-an-email'])
            ->assertUnprocessable()
            ->assertJsonValidationErrors(['fname', 'phone', 'email']);

        $this->assertDatabaseCount('contact_messages', 0);
    }

    public function test_plain_form_submission_redirects_back_with_success(): void
    {
        $this->post(route('contact-us.store'), $this->payload)
            ->assertRedirect(route('contact-us'))
            ->assertSessionHas('success');
    }

    public function test_admin_can_view_message_and_it_is_marked_read(): void
    {
        $message = ContactMessage::create([
            'first_name' => 'Jane', 'email' => 'jane@example.com', 'message' => 'Hello there',
        ]);
        $admin = User::factory()->create();

        $this->actingAs($admin)->get(route('contact-messages.index'))
            ->assertOk()
            ->assertSee('jane@example.com');

        $this->actingAs($admin)->get(route('contact-messages.show', $message))
            ->assertOk()
            ->assertSee('Hello there');

        $this->assertNotNull($message->fresh()->read_at);
    }

    public function test_guest_cannot_view_messages(): void
    {
        $this->get(route('contact-messages.index'))->assertRedirect(route('login'));
    }
}
