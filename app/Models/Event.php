<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'type',
        'description',
        'location',
        'latitude',
        'longitude',
        'start_date',
        'end_date',
        'max_participants',
        'price',
        'currency',
        'organizer_id',
        'facility_id',
        'images',
        'tags',
        'is_active',
        'is_featured',
    ];

    protected $casts = [
        'images' => 'array',
        'tags' => 'array',
        'is_active' => 'boolean',
        'is_featured' => 'boolean',
        'price' => 'decimal:2',
        'start_date' => 'datetime',
        'end_date' => 'datetime',
    ];

    public function organizer()
    {
        return $this->belongsTo(User::class, 'organizer_id');
    }

    public function facility()
    {
        return $this->belongsTo(Facility::class);
    }
}
