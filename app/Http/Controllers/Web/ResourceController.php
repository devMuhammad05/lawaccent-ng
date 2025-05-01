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
        return view('web.resource.blogs');
    }

    public function faqs()
    {
        return view('web.resource.faqs');
    }

    public function caseStudies()
    {
        return view('web.resource.case-studies');
    }

    public function mediaHub()
    {
        return view('web.resource.media-hub');
    }

    public function business()
    {
        return view('web.resource.business');
    }

    public function legalServices()
    {
        return view('web.resource.legal-services');
    }

    public function assessmentTool()
    {
        return view('web.resource.assessment-tool');
    }
}
