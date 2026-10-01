<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['subtitle', 'title', 'image_1', 'image_2', 'image_3'])]
class WhyChooseSection extends Model
{
    public function getImage1UrlAttribute(): string
    {
        return asset($this->image_1);
    }

    public function getImage2UrlAttribute(): string
    {
        return asset($this->image_2);
    }

    public function getImage3UrlAttribute(): string
    {
        return asset($this->image_3);
    }
}
