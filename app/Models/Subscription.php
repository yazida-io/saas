<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class Subscription extends \Laravel\Cashier\Subscription
{
    use SoftDeletes;

    protected $fillable = [
        'code',
        'user_id',
        'membership_id',
    ];
}
