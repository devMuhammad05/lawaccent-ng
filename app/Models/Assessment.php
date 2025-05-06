<?php

namespace App\Models;

use App\Enums\Status;
use Illuminate\Database\Eloquent\Model;

class Assessment extends Model
{
    protected $fillable = [
        'title',
        'description',
        'thumbnail',
        'status',
    ];

    public function scopeActive($query)
    {
        return $query->where('status', Status::ACTIVE);
    }
    public function questions()
    {
        return $this->hasMany(AssessmentQuestion::class);
    }
}
