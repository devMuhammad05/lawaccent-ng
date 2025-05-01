<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ResourceController extends Controller
{
    /**
     * Display a listing of the resource.
    */
    public function index()
    {
        return view('web.resource.index');
    }

    public function blogs()
    {
        return view('web.resource.index');
    }

    public function faqs()
    {
        return view('web.resource.index');
    }

    public function caseStudies()
    {
        return view('web.resource.index');
    }

    public function mediaHub()
    {
        return view('web.resource.index');
    }

    public function business()
    {
        return view('web.resource.index');
    }

    public function legalServices()
    {
        return view('web.resource.index');
    }

    public function assessmentTool()
    {
        return view('web.resource.index');
    }
}
