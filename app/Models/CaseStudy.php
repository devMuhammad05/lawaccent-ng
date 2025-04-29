<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CaseStudy extends Model
{

    public $fillable = [
        'category_id',
        'name',
        'thumbnail',
        'sector',
        'challenges',
        'services',
        'slug',
        'status',
    ];
}
