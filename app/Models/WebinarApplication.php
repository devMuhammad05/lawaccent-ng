<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WebinarApplication extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone_number',
        'question',
        'type',
    ];
}
