<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        'category_id',
        'title',
        'sub_heading',
        'thumbnail',
        'short_body',
        'body',
        'status',
        'slug',
    ];
}
