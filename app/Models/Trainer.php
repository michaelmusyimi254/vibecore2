<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'specialization',
        'description',
        'location',
        'phone',
        'email',
        'experience_years',
        'certifications',
        'rating',
        'hourly_rate',
        'images',
        'is_verified',
        'is_active',
    ];

    protected $casts = [
        'certifications' => 'array',
        'images' => 'array',
        'is_verified' => 'boolean',
        'is_active' => 'boolean',
        'rating' => 'decimal:1',
        'hourly_rate' => 'decimal:2',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
