<?php

namespace App\Http\Controllers\Web;

use App\Models\JobOpening;
use App\Models\SiteSetting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CareerController extends Controller
{
    /**
     * Display a listing of the resource.
    */
    public function index()
    {
        $jobOpenings = JobOpening::all();
        $applicationFormLink = SiteSetting::first()->application_form_link;
        return view('web.career', compact('jobOpenings', 'applicationFormLink'));
    }
}
