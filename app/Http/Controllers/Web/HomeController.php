<?php

namespace App\Http\Controllers\Web;

use App\Models\Faq;
use App\Models\CaseStudy;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $caseStudies = CaseStudy::active()->latest()->get([
            'id',
            'title',
            'thumbnail',
            'legal_issues_explored',
            'slug',
        ])->take(15);

        $faqs = Faq::active()->latest()->get([
            'id',
            'question',
            'answer',
        ])->take(8);

        return view('web.home.index', compact('caseStudies', 'faqs'));
    }
}
