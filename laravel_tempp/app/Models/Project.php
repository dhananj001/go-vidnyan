<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Carbon\Carbon;

class Project extends Model
{
    // ✅ Fillable fields
    protected $fillable = [
        'title',
        'slug',
        'description',
        'content',
        'status',
        'start_date',
        'end_date',
        'image_path',
    ];

    // ✅ Relationship (one project has many images)
    public function images()
    {
        return $this->hasMany(ProjectImage::class);
    }

    // ✅ Scopes
    public function scopeOngoing(Builder $query)
    {
        return $query->where('status', 'ongoing');
    }

    public function scopeCompleted(Builder $query)
    {
        return $query->where('status', 'completed');
    }

    public function scopeFeatured(Builder $query)
    {
        return $query->where('status', 'featured');
    }

    // ✅ Accessors (formatted dates)
    public function getFormattedStartDateAttribute()
    {
        return Carbon::parse($this->start_date)->format('d M Y');
    }

    public function getFormattedEndDateAttribute()
    {
        return $this->end_date
            ? Carbon::parse($this->end_date)->format('d M Y')
            : 'Present';
    }
}