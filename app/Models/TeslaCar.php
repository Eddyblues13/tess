<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeslaCar extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'model',
        'year',
        'variant',
        'price',
        'range_miles',
        'top_speed_mph',
        'zero_to_sixty',
        'drivetrain',
        'image_url',
        'display_order',
        'is_available',
    ];

    protected $casts = [
        'price' => 'decimal:2',
        'zero_to_sixty' => 'decimal:2',
        'is_available' => 'boolean',
    ];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}

