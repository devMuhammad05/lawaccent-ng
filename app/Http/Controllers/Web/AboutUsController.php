<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\AboutUsMetric;
use App\Models\OurTeam;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $aboutUsMetrics = AboutUsMetric::first();
        $teamMembers = OurTeam::all();
        return view('web.about-us.index', compact('aboutUsMetrics', 'teamMembers'));
    }
}
