<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

#[Fillable(['key', 'value'])]
class Setting extends Model
{
    private const CACHE_KEY = 'settings.all';

    /**
     * Editable settings, grouped for the admin form.
     * Types: text, textarea, email, url, image, links (one "Label | url" per line).
     */
    public const GROUPS = [
        'Logos' => [
            'site_logo' => ['label' => 'Header Logo', 'type' => 'image'],
            'footer_logo' => ['label' => 'Footer Logo', 'type' => 'image', 'note' => 'Shown on a dark background.'],
            'favicon' => ['label' => 'Favicon', 'type' => 'image', 'note' => 'Square PNG, e.g. 32×32.'],
        ],
        'Footer About' => [
            'footer_about' => ['label' => 'About Text', 'type' => 'textarea'],
        ],
        'Social Links' => [
            'social_facebook' => ['label' => 'Facebook URL', 'type' => 'url', 'icon' => 'fa-facebook-f'],
            'social_x' => ['label' => 'X (Twitter) URL', 'type' => 'url', 'icon' => 'fa-x-twitter'],
            'social_instagram' => ['label' => 'Instagram URL', 'type' => 'url', 'icon' => 'fa-instagram'],
            'social_pinterest' => ['label' => 'Pinterest URL', 'type' => 'url', 'icon' => 'fa-pinterest-p'],
            'social_linkedin' => ['label' => 'LinkedIn URL', 'type' => 'url', 'icon' => 'fa-linkedin-in'],
            'social_youtube' => ['label' => 'YouTube URL', 'type' => 'url', 'icon' => 'fa-youtube'],
        ],
        'Footer Quick Links' => [
            'footer_links_title' => ['label' => 'Heading', 'type' => 'text'],
            'footer_links' => ['label' => 'Links', 'type' => 'links', 'note' => 'One per line as <code>Label | url</code>, e.g. <code>About Us | about-us</code>.'],
        ],
        'Footer Contact' => [
            'footer_contact_title' => ['label' => 'Heading', 'type' => 'text'],
            'footer_phone_label' => ['label' => 'Phone Label', 'type' => 'text'],
            'footer_phone' => ['label' => 'Phone', 'type' => 'text'],
            'footer_email_label' => ['label' => 'Email Label', 'type' => 'text'],
            'footer_email' => ['label' => 'Email', 'type' => 'email'],
            'footer_address' => ['label' => 'Address', 'type' => 'text'],
        ],
        'Footer Newsletter & Copyright' => [
            'footer_newsletter_title' => ['label' => 'Newsletter Heading', 'type' => 'text', 'note' => 'Leave empty to hide the subscribe box.'],
            'footer_copyright' => ['label' => 'Copyright Text', 'type' => 'text', 'note' => 'Use <code>{year}</code> for the current year.'],
        ],
    ];

    protected static function booted(): void
    {
        static::saved(fn () => Cache::forget(self::CACHE_KEY));
        static::deleted(fn () => Cache::forget(self::CACHE_KEY));
    }

    /** All settings as [key => value], cached until a setting changes. */
    public static function allValues(): array
    {
        return Cache::rememberForever(self::CACHE_KEY, fn () => static::pluck('value', 'key')->all());
    }

    public static function get(string $key, mixed $default = null): mixed
    {
        $value = static::allValues()[$key] ?? null;

        return $value === null || $value === '' ? $default : $value;
    }

    public static function fields(): array
    {
        return array_merge(...array_values(self::GROUPS));
    }

    /** Parse the "Label | url" lines of a links setting into [['label' => , 'url' => ], ...]. */
    public static function links(string $key): array
    {
        $links = [];
        foreach (preg_split('/\R/', (string) static::get($key)) as $line) {
            [$label, $url] = array_pad(array_map('trim', explode('|', $line, 2)), 2, '');
            if ($label !== '') {
                $links[] = ['label' => $label, 'url' => $url === '' ? '#' : (preg_match('#^(https?:|mailto:|tel:|\#)#', $url) ? $url : url($url))];
            }
        }

        return $links;
    }
}
