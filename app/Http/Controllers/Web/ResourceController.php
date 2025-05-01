<?php

namespace App\Http\Controllers\Web;

use App\Models\Faq;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
        $faqs = Faq::all();
        return view('web.resource.faqs', compact('faqs'));
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
