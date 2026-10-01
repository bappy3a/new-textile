<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable([
    'image', 'item_title', 'item_text',
    'counter_1_number', 'counter_1_suffix', 'counter_1_label',
    'counter_2_number', 'counter_2_suffix', 'counter_2_label',
    'contact_title', 'contact_email', 'contact_phone',
])]
class HeroInfo extends Model
{
    public function getImageUrlAttribute(): string
    {
        return asset($this->image);
    }

    public function getPhoneLinkAttribute(): string
    {
        return 'tel:'.preg_replace('/[^\d+]/', '', (string) $this->contact_phone);
    }
}
