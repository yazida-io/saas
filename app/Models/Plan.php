<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Plan extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'description',
        'features',
        'color',
        'best_offer',
        'price',
        'stripe_price_id',
    ];

    protected $casts = [
        'features' => 'array',
        'best_offer' => 'boolean',
    ];
}
