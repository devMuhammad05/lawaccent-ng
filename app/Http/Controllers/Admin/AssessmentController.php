<?php

namespace App\Http\Controllers\Admin;

use App\Models\Assessment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\DataTables\AssessmentsDataTable;
use App\Http\Requests\Admin\Assessment\StoreAssessmentRequest;

class AssessmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(AssessmentsDataTable $assessmentsDataTable)
    {
        return $assessmentsDataTable->render('admin.assessment.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.assessment.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAssessmentRequest $request)
    {
        $data = $request->validated();

        DB::beginTransaction();

        try {

            // if ($request->hasFile('thumbnail')) {
            //     $imagePath = $request->file('thumbnail')->store('assessment', 'public');

            //     $data['thumbnail'] = (string) 'storage/'.$imagePath;
            // }

            // Create the assessment
            $assessment = Assessment::create([
                'title' => $data['title'],
                'description' => $data['description'],
            ]);

            foreach ($data['questions'] as $qIndex => $questionData) {
                $question = $assessment->questions()->create([
                    'head' => $questionData['head'],
                    'text' => $questionData['text'],
                ]);

                foreach ($questionData['options'] as $i => $optionData) {
                    $question->options()->create([
                        'text' => $optionData['text'],
                        'is_correct' => ($i == $questionData['correct_option']),
                    ]);
                }
            }
            DB::commit();

            return redirect()->route('admin.assessments.index')->with('success', 'Assessment created successfully!');
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->withErrors(['error' => 'Something went wrong: ' . $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $assessment = Assessment::find($id);

        return view('admin.assessment.edit', compact('assessment'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(StoreAssessmentRequest $request, string $id)
    {
        $assessment = Assessment::findOrFail($id);

        if (!$assessment) {
            abort(404);
        }

        $validated = $request->validated();

        // Update assessment info
        $assessment->update([
            'title' => $validated['title'],
            'description' => $validated['description'] ?? '',
            'status' => $validated['status']
        ]);

        //Delete old questions and options
        foreach ($assessment->questions as $question) {
            $question->options()->delete();
            $question->delete();
        }

        //Recreate questions and options
        foreach ($validated['questions'] as $qIndex => $questionData) {
            $question = $assessment->questions()->create([
                'text' => $questionData['text'],
                'head' => $questionData['head']
            ]);

            foreach ($questionData['options'] as $oIndex => $option) {
                $question->options()->create([
                    'text' => $option['text'],
                    'is_correct' => (int) $questionData['correct_option'] === $oIndex,
                ]);
            }
        }

        return redirect()->route('admin.assessments.index')->with('success', 'Assessment updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
