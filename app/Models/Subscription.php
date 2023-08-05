<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class Subscription extends \Laravel\Cashier\Subscription
{
    use SoftDeletes;

    const DEFAULT_SUBSCRIPTION = 'default';
}
