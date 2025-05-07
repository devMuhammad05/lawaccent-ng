<?php

namespace App\Http\Controllers\Web;

use App\Models\Faq;
use App\Models\Blog;
use App\Models\CaseStudy;
use App\Models\Assessment;
use App\Models\BlogCategory;
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
        return view('web.resource.blog.index');
    }

    public function showBlog(string $slug)
    {
        $blog = Blog::where('slug', $slug)->first();

        if (! $blog) {
            return abort(404);
        }

        // Fetch recent blogs from the same category, excluding the current one
        $recentBlogs = Blog::where('category_id', $blog->category_id)
                          ->where('id', '!=', $blog->id)
                          ->latest()
                          ->take(3)
                          ->get();

        return view('web.resource.blog.show', compact('blog', 'recentBlogs'));
    }


    public function faqs()
    {
        $faqs = Faq::active()->get();
        return view('web.resource.faqs', compact('faqs'));
    }

    public function caseStudies()
    {
        return view('web.resource.case-study.index');
    }

    public function showCaseStudy(string $slug)
    {
        $caseStudy = CaseStudy::where('slug', $slug)->first();

        if (! $caseStudy) {
            return abort(404);
        }

        return view('web.resource.case-study.show', compact('caseStudy'));
    }

    public function mediaHub()
    {
        return view('web.resource.media-hub');
    }

    public function business()
    {
        $blogs = Blog::active()->latest()->take(8)->get(['id', 'title', 'sub_heading', 'slug', 'thumbnail']);
        return view('web.resource.business', compact('blogs'));
    }

    public function legalServices()
    {
        return view('web.resource.legal-services');
    }

    public function assessmentTool()
    {
        $assessments = Assessment::active()->get();

        return view('web.resource.assessment-tool', compact('assessments'));
    }

    public function showAssessment(Assessment $assessment)
    {
        if (! $assessment) {
            abort(404);
        }

        // $questionsData = [];

        // foreach ($assessment->questions as $question) {
        //     $options = [];

        //     foreach ($question->options as $option) {
        //         $options[] = [
        //             'text' => $option->text,
        //             'correct' => (bool) $option->is_correct,
        //         ];
        //     }

        //     $questionsData[] = [
        //         'question' => $question->text,
        //         'options' => $options,
        //     ];
        // }

        // $questionsJson = $questionsData;

        return view('web.resource.assessment.show', compact('assessment'));
    }
}
