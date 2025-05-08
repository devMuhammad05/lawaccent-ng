<?php

namespace App\Models;

use App\Enums\Status;
use Illuminate\Database\Eloquent\Model;

class VideoMedia extends Model
{
    protected $fillable = [
        'title',
        'media_location',
        'media_link',
    ];

}
