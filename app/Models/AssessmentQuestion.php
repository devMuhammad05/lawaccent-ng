<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AssessmentQuestion extends Model
{
    protected $fillable = [
        'assessment_id',
        'text',
        'head',
    ];


    public function assessment()
    {
        return $this->belongsTo(Assessment::class);
    }

    public function options()
    {
        return $this->hasMany(AssessmentOption::class);
    }

}
