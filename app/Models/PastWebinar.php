<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PastWebinar extends Model
{
    protected $fillable = [
        'title',
        'topic',
        'recording_url',
    ];
}
