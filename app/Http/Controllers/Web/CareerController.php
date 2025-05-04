<?php

namespace App\Http\Controllers\Web;

use App\Models\JobOpening;
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
        return view('web.career', compact('jobOpenings'));
    }
}
