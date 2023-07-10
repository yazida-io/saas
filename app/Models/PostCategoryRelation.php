<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostCategoryRelation extends Model
{
    protected $fillable = [
        'post_id',
        'post_category_id',
    ];
}
