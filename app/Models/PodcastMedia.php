<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PodcastMedia extends Model
{
    protected $fillable = [
        'title',
        'description',
        'media_location',
        'media_link',
    ];
}


