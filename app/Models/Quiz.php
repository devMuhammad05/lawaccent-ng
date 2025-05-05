<?php

namespace App\Models;

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

    public function questions()
    {
        return $this->hasMany(Question::class);
    }

}
