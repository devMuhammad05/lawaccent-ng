<?php

namespace App\Models;

use App\Enums\Status;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    protected $fillable = [
        'question',
        'answer',
        'show_on_home_page',
        'status',
    ];

    public function scopeActive($query)
    {
        return $query->where('status', Status::ACTIVE);
    }
}
