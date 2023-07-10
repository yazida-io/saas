<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TicketReply extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'code',
        'ticket_id',
        'user_id',
        'message',
    ];
}
