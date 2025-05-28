<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Tutor extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'bio',
        'profile_image',
        'subjects',
        'levels',
        'education',
        'experience_years',
        'hourly_rate',
        'min_rate',
        'max_rate',
        'availability',
        'is_available',
        'city',
        'state',
        'country',
        'latitude',
        'longitude',
        'online_tutoring',
        'in_person_tutoring',
        'rating',
        'total_reviews',
        'total_students',
        'is_verified',
        'is_active',
        'last_active_at'
    ];

    protected $casts = [
        'subjects' => 'array',
        'levels' => 'array',
        'availability' => 'array',
        'hourly_rate' => 'decimal:2',
        'min_rate' => 'decimal:2',
        'max_rate' => 'decimal:2',
        'rating' => 'decimal:2',
        'latitude' => 'decimal:8',
        'longitude' => 'decimal:8',
        'is_available' => 'boolean',
        'online_tutoring' => 'boolean',
        'in_person_tutoring' => 'boolean',
        'is_verified' => 'boolean',
        'is_active' => 'boolean',
        'last_active_at' => 'datetime'
    ];

    // Scope for active tutors
    public function scopeActive($query)
    {
        return $query->where('is_active', true)->where('is_available', true);
    }

    // Scope for verified tutors
    public function scopeVerified($query)
    {
        return $query->where('is_verified', true);
    }

    // Search scope with advanced filtering
    public function scopeSearch($query, array $filters = [])
    {
        return $query
            ->when($filters['subject'] ?? null, function ($query, $subject) {
                return $query->whereJsonContains('subjects', $subject);
            })
            ->when($filters['level'] ?? null, function ($query, $level) {
                return $query->whereJsonContains('levels', $level);
            })
            ->when($filters['min_price'] ?? null, function ($query, $minPrice) {
                return $query->where('hourly_rate', '>=', $minPrice);
            })
            ->when($filters['max_price'] ?? null, function ($query, $maxPrice) {
                return $query->where('hourly_rate', '<=', $maxPrice);
            })
            ->when($filters['city'] ?? null, function ($query, $city) {
                return $query->where('city', 'like', "%{$city}%");
            })
            ->when($filters['state'] ?? null, function ($query, $state) {
                return $query->where('state', 'like', "%{$state}%");
            })
            ->when($filters['min_rating'] ?? null, function ($query, $minRating) {
                return $query->where('rating', '>=', $minRating);
            })
            ->when($filters['online_only'] ?? null, function ($query, $onlineOnly) {
                if ($onlineOnly) {
                    return $query->where('online_tutoring', true);
                }
            })
            ->when($filters['in_person_only'] ?? null, function ($query, $inPersonOnly) {
                if ($inPersonOnly) {
                    return $query->where('in_person_tutoring', true);
                }
            })
            ->when($filters['search'] ?? null, function ($query, $search) {
                return $query->where(function ($query) use ($search) {
                    $query->where('name', 'like', "%{$search}%")
                          ->orWhere('bio', 'like', "%{$search}%")
                          ->orWhere('education', 'like', "%{$search}%");
                });
            });
    }

    // Get formatted rating
    public function getFormattedRatingAttribute()
    {
        return number_format($this->rating, 1);
    }

    // Get experience text
    public function getExperienceTextAttribute()
    {
        $years = $this->experience_years;
        if ($years == 0) return 'New tutor';
        if ($years == 1) return '1 year experience';
        return "{$years} years experience";
    }

    // Get subjects as comma-separated string
    public function getSubjectsStringAttribute()
    {
        return is_array($this->subjects) ? implode(', ', $this->subjects) : '';
    }

    // Get levels as comma-separated string
    public function getLevelsStringAttribute()
    {
        return is_array($this->levels) ? implode(', ', $this->levels) : '';
    }
}
