<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable([
    'image_1', 'image_2',
    'counter_number', 'counter_suffix', 'counter_label',
    'subtitle', 'title', 'description', 'item_title',
    'button_text', 'button_url', 'contact_label', 'contact_phone',
])]
class AboutUs extends Model
{
    protected $table = 'about_us';

    public function getImage1UrlAttribute(): string
    {
        return asset($this->image_1);
    }

    public function getImage2UrlAttribute(): string
    {
        return asset($this->image_2);
    }

    public function getPhoneLinkAttribute(): string
    {
        return 'tel:'.preg_replace('/[^\d+]/', '', (string) $this->contact_phone);
    }
}
