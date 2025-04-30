<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OurTeam extends Model
{
    protected $fillable = [
        'image_path',
        'full_name',
        'role',
        'linkedin_url',
    ];
}
