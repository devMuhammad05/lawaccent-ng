<?php

namespace App\Http\Controllers\Web;

use App\Models\BlogCategory;
use App\Models\Faq;
use App\Models\Blog;
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
        $blogs = Blog::latest()->with('category')->paginate(6);
        $blogCategories = BlogCategory::all();
        return view('web.resource.blog.index', compact('blogs', 'blogCategories'));
    }

    public function showBlog(string $slug)
    {

        $blog = Blog::where(['slug' => $slug])->first();
        if (! $blog) {
            return abort(404);
        }

        return view('web.resource.blog.show', compact('blog'));
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
