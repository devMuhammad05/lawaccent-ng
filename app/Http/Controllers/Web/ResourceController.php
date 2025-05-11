<?php

namespace App\Http\Controllers\Web;

use App\Models\Faq;
use App\Models\Blog;
use App\Models\CaseStudy;
use App\Models\Assessment;
use App\Models\VideoMedia;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
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

        if (!$blog) {
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

    public function downloadPdf(string $slug)
    {
        $blog = Blog::where('slug', $slug)->first();

        if (! $blog) {
            return abort(404);
        }

        $pdf = Pdf::loadView('web.resource.blog.pdf', ['blog' => $blog]);
        return $pdf->stream(config('app.name') . " Blog - " . $blog->title . '.pdf');
    }

    // public function downloadPdf(string $slug)
    // {
    //     $blog = Blog::where('slug', $slug)->first();

    //     if (! $blog) {
    //         return abort(404);
    //     }

    //     $pdf = Pdf::loadView('web.resource.blog.pdf', ['blog' => $blog]);

    //     // Get canvas and page dimensions
    //     $canvas = $pdf->getCanvas();
    //     $pageWidth = $canvas->get_width();
    //     $pageHeight = $canvas->get_height();

    //     // Watermark image path - replace with your image path
    //     // The image should be accessible via public path
    //     $watermarkPath = public_path('web/assets/images/logo.webp');

    //     // Make sure the image exists
    //     if (file_exists($watermarkPath)) {
    //         // Calculate watermark size and position
    //         // Adjust these values based on your image and desired appearance
    //         $imageWidth = $pageWidth * 0.4; // 40% of page width
    //         $imageHeight = 500; // Auto-calculate height to maintain aspect ratio
    //         // $xPosition = ($pageWidth - $imageWidth) / 2; // Center horizontally
    //         $xPosition = 200; // Center horizontally
    //         // $yPosition = ($pageHeight - $imageHeight) / 2; // Center vertically
    //         $yPosition = 100; // Center vertically

    //         // Set low opacity for the watermark
    //         $canvas->set_opacity(1); // 8% opacity - subtle watermark

    //         // Add watermark to each page using callback
    //         $pdf->output([
    //             'before_send_to_browser' => function($pdf) use ($canvas, $watermarkPath, $xPosition, $yPosition, $imageWidth, $imageHeight) {
    //                 $totalPages = $pdf->getDomPDF()->getCanvas()->get_page_count();

    //                 for ($i = 1; $i <= $totalPages; $i++) {
    //                     $canvas = $pdf->getDomPDF()->getCanvas();
    //                     $canvas->page_script($i, 'reset');
    //                     $canvas->set_opacity(0.8);
    //                     $canvas->page_image(
    //                         $watermarkPath,
    //                         $xPosition,
    //                         $yPosition,
    //                         $imageWidth,
    //                         $imageHeight,
    //                         'auto',
    //                         true
    //                     );
    //                 }
    //             }
    //         ]);
    //     }

    //     return $pdf->stream(config('app.name') . " Blog - " . $blog->title . '.pdf');
    // }


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

        if (!$caseStudy) {
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
        $caseStudies = CaseStudy::active()->latest()->take(6)->get();
        $blogs = Blog::active()->latest()->take(6)->get();
        $faqs = Faq::active()->get();
        $videoMedias = VideoMedia::latest()->take(4)->get();
        return view('web.resource.legal-services', compact('caseStudies', 'blogs', 'faqs', 'videoMedias'));
    }

    public function assessmentTool()
    {
        $assessments = Assessment::active()->get();

        return view('web.resource.assessment.index', compact('assessments'));
    }

    public function showAssessment(Assessment $assessment)
    {
        if (!$assessment) {
            abort(404);
        }

        $questionsData = [];

        foreach ($assessment->questions as $question) {
            $options = [];

            foreach ($question->options as $option) {
                $options[] = [
                    'text' => $option->text,
                    'correct' => (bool) $option->is_correct,
                ];
            }

            $questionsData[] = [
                'question' => $question->text,
                'head' => $question->head,
                'options' => $options,
            ];
        }

        $questionsJson = $questionsData;

        // dd($questionsJson);

        return view('web.resource.assessment.show', compact('assessment', 'questionsJson'));
    }
}
