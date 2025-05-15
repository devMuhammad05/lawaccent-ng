<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LegalCheckList extends Model
{
    public $fillable = [
        'title',
        'description',
        'body',
    ];
}
