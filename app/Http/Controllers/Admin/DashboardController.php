<?php

namespace App\Http\Controllers\Admin;

use App\Models\ContactUs;
use App\Models\Faq;
use App\Models\Blog;
use App\Models\ScholarshipApplication;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index(): View
    {

        $unreadEnquiries = ScholarshipApplication::unread()->count();
        $unreadMessages = ContactUs::unread()->count();
        $totalBlogs = Blog::all()->count();
        $faqs = Faq::all()->count();

        // flash()->success('Welcome back!');


        return view('admin.dashboard.index');
    }
}
