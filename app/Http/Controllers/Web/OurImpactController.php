<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OurImpactController extends Controller
{
    /**
     * Display a listing of the resource.
    */
    public function index()
    {
        return view('web.impact.index');
    }

    public function legalLiteracy()
    {
        return view('web.impact.legal-literacy');

    }

    public function lawSchool()
    {
        return view('web.impact.law-school');
    }

    public function scholarship()
    {
        return view('web.impact.scholarship');
    }
}
