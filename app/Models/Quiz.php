<?php

namespace App\Models;

use App\Enums\Status;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    protected $fillable = [
        'title',
        'sub_title',
        'description',
        'why_take_quiz',
        'status',
    ];

    public function scopeActive($query)
    {
        return $query->where('status', Status::ACTIVE);
    }
    public function questions()
    {
        return $this->hasMany(Question::class);
    }

}
