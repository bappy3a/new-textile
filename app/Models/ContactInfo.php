<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable([
    'image', 'working_hours_title', 'working_hours',
    'email', 'phone', 'address',
    'form_subtitle', 'form_title', 'form_description',
    'map_subtitle', 'map_title', 'map_embed_url',
])]
class ContactInfo extends Model
{
    public function getImageUrlAttribute(): ?string
    {
        return $this->image ? asset($this->image) : null;
    }

    /** Working hours are stored one entry per line. */
    public function getWorkingHoursListAttribute(): array
    {
        return array_values(array_filter(array_map('trim', preg_split('/\R/', (string) $this->working_hours))));
    }

    public function getPhoneLinkAttribute(): string
    {
        return 'tel:'.preg_replace('/[^\d+]/', '', (string) $this->phone);
    }
}
