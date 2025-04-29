<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutUsMetric extends Model
{
    protected $fillable = [
        'year',
        'number_of_offices',
        'number_of_clients',
        'number_of_scholarships',
    ];

}
