<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CaseStudy extends Model
{

    public $fillable = [
        'case_study_category_id',
        'title',
        'thumbnail',
        'legal_issues_explored',
        'body',
        'slug',
        'status',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(CaseStudyCategory::class, 'case_study_category_id');
    }
}
