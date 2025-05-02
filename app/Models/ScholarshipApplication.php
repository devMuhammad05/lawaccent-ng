<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ScholarshipApplication extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone_number',
        'eligibility_status',
        'graduation_date',
        'degree_classification',
        'cgpa',
        'previously_selected_for_scholarship',
        'scholarship_details',
        'transcript_doc',
        'essay_doc',
        'cv_doc',
        'is_read',
    ];

}
