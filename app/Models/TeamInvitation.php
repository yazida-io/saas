<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TeamInvitation extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'code',
        'email',
        'team_id',
        'token',
    ];
}
