<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Carbon\Carbon;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'content',
        'status',
        'start_date',
        'end_date',
        'image_path',
        'category',
    ];

    protected $dates = [
        'start_date',
        'end_date',
    ];

    /*
    |--------------------------------------------------------------------------
    | Relationships
    |--------------------------------------------------------------------------
    */

    public function images()
    {
        return $this->hasMany(ProjectImage::class);
    }

    /*
    |--------------------------------------------------------------------------
    | Scopes (Status Filtering)
    |--------------------------------------------------------------------------
    */

    public function scopeFeatured($query)
    {
        return $query->where('status', 'featured');
    }

    public function scopeOngoing($query)
    {
        return $query->where('status', 'ongoing');
    }

    public function scopeCompleted($query)
    {
        return $query->where('status', 'completed');
    }

    /*
    |--------------------------------------------------------------------------
    | Accessors (Formatted Dates)
    |--------------------------------------------------------------------------
    */

    public function getFormattedStartDateAttribute()
    {
        return $this->start_date
            ? Carbon::parse($this->start_date)->format('d M Y')
            : null;
    }

    public function getFormattedEndDateAttribute()
    {
        return $this->end_date
            ? Carbon::parse($this->end_date)->format('d M Y')
            : null;
    }
}