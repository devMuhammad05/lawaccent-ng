<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CookieNotice extends Model
{
    protected $fillable = [
        'question',
        'answer',
        'status',
    ];
}
