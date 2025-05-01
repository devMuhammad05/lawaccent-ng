<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PracticeAreaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('web.practice-area.index');
    }

    public function dataProtection()
    {
        return view('web.practice-area.data-protection');
    }

    public function corporateLaw()
    {
        return view('web.practice-area.corporate-law');
    }

    public function familyLaw()
    {
        return view('web.practice-area.family-law');
    }

    public function litigation()
    {
        return view('web.practice-area.litigation');
    }

    public function realEstate()
    {
        return view('web.practice-area.real-estate');
    }

    public function debtRecovery()
    {
        return view('web.practice-area.debt-recovery');
    }

    public function banking()
    {
        return view('web.practice-area.banking');
    }
}
