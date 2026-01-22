<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvestmentPlan extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'category',
        'strategy',
        'risk_level',
        'nav',
        'one_year_return',
        'min_investment',
        'is_featured',
        'display_order',
    ];

    protected $casts = [
        'nav' => 'decimal:4',
        'one_year_return' => 'decimal:2',
        'min_investment' => 'decimal:2',
        'is_featured' => 'boolean',
    ];
}

