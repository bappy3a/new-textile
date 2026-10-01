<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['section', 'type', 'label', 'title', 'description', 'icon', 'number', 'suffix', 'sort_order', 'is_active'])]
class AboutPageItem extends Model
{
    protected function casts(): array
    {
        return [
            'is_active' => 'boolean',
            'sort_order' => 'integer',
        ];
    }

    public function scopeActive(Builder $query): Builder
    {
        return $query->where('is_active', true)->orderBy('sort_order')->orderBy('id');
    }

    public function getIconUrlAttribute(): ?string
    {
        return $this->icon ? asset($this->icon) : null;
    }

    public function getSectionLabelAttribute(): string
    {
        return AboutPageSection::SECTIONS[$this->section]['label'] ?? $this->section;
    }

    public function getTypeLabelAttribute(): string
    {
        return AboutPageSection::SECTIONS[$this->section]['types'][$this->type] ?? $this->type;
    }
}
