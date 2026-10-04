<?php

namespace App\Models;

use Database\Factories\GalleryCategoryFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[Fillable(['name', 'is_favorite'])]
class GalleryCategory extends Model
{
    /** @use HasFactory<GalleryCategoryFactory> */
    use HasFactory;

    protected function casts(): array
    {
        return [
            'is_favorite' => 'boolean',
        ];
    }

    public function images(): HasMany
    {
        return $this->hasMany(GalleryImage::class);
    }
}
