<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Social extends Model
{
    protected $fillable = [
        'x_link',
        'linkedin_link',
        'facebook_link',
        'instagram_link',
    ];
}
