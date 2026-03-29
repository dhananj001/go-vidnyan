<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = [
        'name',
        'role',
        'image_path',
        'sort_order',
        'is_active',
    ];

    protected function casts(): array
    {
        return [
            'is_active' => 'boolean',
        ];
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', true)
                     ->orderBy('sort_order')
                     ->latest();
    }

    public function getImageUrlAttribute(): string
    {
        if (str_starts_with($this->image_path, 'images/')) {
            return asset($this->image_path);
        }
        return asset('storage/' . $this->image_path);
    }
}