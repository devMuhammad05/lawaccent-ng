<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VideoMedia extends Model
{
    protected $fillable = [
        'title',
        'media_location',
        'media_link',
    ];
}
