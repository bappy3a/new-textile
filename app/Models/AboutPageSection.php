<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[Fillable([
    'key', 'subtitle', 'title', 'description',
    'image_1', 'image_2', 'image_3',
    'button_text', 'button_url', 'contact_label', 'contact_phone', 'is_active',
])]
class AboutPageSection extends Model
{
    /**
     * Sections of the About Us page: which images they use and which item types they hold.
     */
    public const SECTIONS = [
        'about' => [
            'label' => 'About Company',
            'images' => ['image_1' => 'Main image', 'image_2' => 'Second image', 'image_3' => 'Ratings avatars image'],
            'fields' => ['button', 'contact'],
            'types' => ['list' => 'Bullet Point', 'rating' => 'Rating Counter', 'feature' => 'Feature Item'],
        ],
        'approach' => [
            'label' => 'Our Approach',
            'images' => ['image_1' => 'Image 1 (back)', 'image_2' => 'Image 2 (front)'],
            'fields' => [],
            'types' => ['counter' => 'Counter', 'feature' => 'Mission / Vision Item'],
        ],
        'why_choose' => [
            'label' => 'Why Choose Us',
            'images' => ['image_1' => 'Section image', 'image_2' => 'Footer avatar'],
            'fields' => ['contact'],
            'types' => ['list' => 'Bullet Point', 'counter' => 'Counter Card'],
        ],
        'what_we_do' => [
            'label' => 'What We Do',
            'images' => ['image_1' => 'Section image'],
            'fields' => [],
            'types' => ['feature' => 'Body Item', 'counter' => 'Counter'],
        ],
        'awards' => [
            'label' => 'Awards',
            'images' => [],
            'fields' => ['button'],
            'types' => ['award' => 'Award'],
        ],
        'faqs' => [
            'label' => 'FAQs',
            'images' => [],
            'fields' => ['button'],
            'types' => ['faq' => 'Question'],
        ],
    ];

    protected function casts(): array
    {
        return [
            'is_active' => 'boolean',
        ];
    }

    public function items(): HasMany
    {
        return $this->hasMany(AboutPageItem::class, 'section', 'key');
    }

    /** Active items of the given type, in display order. */
    public function itemsOf(string $type)
    {
        return $this->items->where('type', $type)->values();
    }

    public function config(): array
    {
        return self::SECTIONS[$this->key] ?? ['label' => $this->key, 'images' => [], 'fields' => [], 'types' => []];
    }

    public function imageUrl(string $field): ?string
    {
        return $this->$field ? asset($this->$field) : null;
    }

    public function getButtonLinkAttribute(): string
    {
        return $this->button_url ? url($this->button_url) : '#';
    }

    public function getPhoneLinkAttribute(): string
    {
        return 'tel:'.preg_replace('/[^\d+]/', '', (string) $this->contact_phone);
    }
}
