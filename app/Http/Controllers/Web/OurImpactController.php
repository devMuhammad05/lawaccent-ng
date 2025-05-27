<?php

namespace App\Http\Controllers\Web;

use App\Models\Quiz;
use App\Models\Webinar;
use App\Models\PastWebinar;
use App\Models\SiteSetting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ScholarshipApplication;
use App\Http\Requests\Web\StoreScholarshipApplication;

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
        $webinars = Webinar::latest()->get();
        $pastWebinars = PastWebinar::latest()->get();
        return view('web.impact.legal-literacy', compact('webinars', 'pastWebinars'));
    }

    public function lawSchool()
    {
        return view('web.impact.law-school');
    }

    public function scholarship()
    {
        $isAcceptingApplication = SiteSetting::first('schoolarship_application_status')->schoolarship_application_status;

        return view('web.impact.scholarship', compact('isAcceptingApplication'));
    }

    public function applyScholarship(StoreScholarshipApplication $request)
    {
        $validated = $request->validated();

        if ($request->hasFile('transcript_doc')) {
            $path = $request->file('transcript_doc')->store('docs', 'public');

            $validated['transcript_doc'] = (string) 'storage/' . $path;
        }

        if ($request->hasFile('essay_doc')) {
            $path = $request->file('essay_doc')->store('docs', 'public');

            $validated['essay_doc'] = (string) 'storage/' . $path;
        }

        if ($request->hasFile('cv_doc')) {
            $path = $request->file('cv_doc')->store('docs', 'public');

            $validated['cv_doc'] = (string) 'storage/' . $path;
        }

        ScholarshipApplication::create($validated);

        flash()->success('Your application has been successfully!');

        return redirect()->route('our-impact.scholarship');
    }

    public function quizzes(Request $request)
    {
        $query = Quiz::active()->latest()->withCount('questions');

        if ($request->has('search') && $request->search) {
            $query->where(function ($q) use ($request) {
                $q->where('title', 'like', '%' . $request->search . '%')
                    ->orWhere('sub_title', 'like', '%' . $request->search . '%')
                    ->orWhere('description', 'like', '%' . $request->search . '%')
                    ->orWhere('why_take_quiz', 'like', '%' . $request->search . '%');
            });
        }


        $quizzes = $query->get();

        return view('web.impact.quiz.index', compact('quizzes'));
    }

    public function whyTakeQuiz(Quiz $quiz)
    {
        return view('web.impact.quiz.why_take_quiz', compact('quiz'));
    }

    public function showQuiz(Quiz $quiz)
    {
        $questionsData = [];

        foreach ($quiz->questions as $question) {
            $options = [];

            foreach ($question->options as $option) {
                $options[] = [
                    'text' => $option->text,
                    'correct' => (bool) $option->is_correct,
                    'explanation' => $option->explanation
                ];
            }

            $questionsData[] = [
                'question' => $question->text,
                'options' => $options,
            ];
        }

        $questionsJson = $questionsData;

        return view('web.impact.quiz.show', compact('quiz', 'questionsJson'));
    }

    public function showWebinar(Webinar $webinar)
    {
        $webinar->date = \Carbon\Carbon::parse($webinar->date)->toIso8601String();
        return view('web.impact.webinar-details', compact('webinar', ));
    }

    public function showPastWebinar(PastWebinar $pastWebinar)
    {
        $pastWebinar->date = \Carbon\Carbon::parse($pastWebinar->date)->toIso8601String();
        return view('web.impact.past-webinar-details', compact('pastWebinar', ));
    }


}
