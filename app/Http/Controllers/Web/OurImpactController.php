<?php

namespace App\Http\Controllers\web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ScholarshipApplication;

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

    public function applyScholarship(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|min:3',
            'email' => 'required|email:rfc,dns,spoof',
            'phone_number' => "required|string|max:255|regex:/^(\+?\d{1,3}[- ]?)?\d{10}$/",
            'eligibility_status' => 'required',
            'graduation_date' => 'required|date',
            'degree_classification' => 'required|string',
            'cgpa' => 'required|numeric',
            'previously_selected_for_scholarship' => 'required|string',
            'scholarship_details' => 'nullable|max:150',
            'transcript_doc' => 'required|file|mimes:pdf,doc,docx|max:5048',
            'essay_doc' => 'required|file|mimes:pdf,doc,docx|max:5048',
            'cv_doc' => 'required|file|mimes:pdf,doc,docx|max:5048',
        ]);

        if ($request->hasFile('transcript_doc')) {
            $path = $request->file('transcript_doc')->store('docs', 'public');

            $validated['transcript_doc'] = (string) 'storage/'.$path;
        }

        if ($request->hasFile('essay_doc')) {
            $path = $request->file('essay_doc')->store('docs', 'public');

            $validated['essay_doc'] = (string) 'storage/'.$path;
        }

        if ($request->hasFile('cv_doc')) {
            $path = $request->file('cv_doc')->store('docs', 'public');

            $validated['cv_doc'] = (string) 'storage/'.$path;
        }

        ScholarshipApplication::create($validated);

        flash()->success('Your application has been successfully!');

        return redirect()->route('our-impact.scholarship');
    }

}
