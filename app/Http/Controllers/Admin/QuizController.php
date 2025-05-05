<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\Quiz\StoreQuizRequest;
use App\Models\Quiz;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\DataTables\QuizzesDataTable;
use App\Http\Controllers\Controller;

class QuizController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(QuizzesDataTable $quizzesDataTable)
    {
        return $quizzesDataTable->render('admin.quiz.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.quiz.create');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreQuizRequest $request)
    {
        $data = $request->validated();

        DB::beginTransaction();

        try {
            // Create the quiz
            $quiz = Quiz::create([
                'title' => $data['title'],
                'sub_title' => $data['sub_title'],
                'description' => $data['description'] ?? '',
                'why_take_quiz' => $validated['why_take_quiz'] ?? ''
            ]);

            foreach ($data['questions'] as $qIndex => $questionData) {
                $question = $quiz->questions()->create([
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

            return redirect()->route('admin.quizzes.index')->with('success', 'Quiz created successfully!');
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
        $quiz = Quiz::find($id);

        return view('admin.quiz.edit', compact('quiz'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreQuizRequest $request, string $id)
    {
        $quiz = Quiz::findOrFail($id);

        if(! $quiz){
            abort(404);
        }

        $validated = $request->validated();

        // Update quiz info
        $quiz->update([
            'title' => $validated['title'],
            'sub_title' => $validated['sub_title'],
            'description' => $validated['description'] ?? '',
            'why_take_quiz' => $validated['why_take_quiz'] ?? ''
        ]);

        //Delete old questions and options
        foreach ($quiz->questions as $question) {
            $question->options()->delete();
            $question->delete();
        }

        //Recreate questions and options
        foreach ($validated['questions'] as $qIndex => $questionData) {
            $question = $quiz->questions()->create([
                'text' => $questionData['text'],
            ]);

            foreach ($questionData['options'] as $oIndex => $option) {
                $question->options()->create([
                    'text' => $option['text'],
                    'is_correct' => (int)$questionData['correct_option'] === $oIndex,
                ]);
            }
        }

        return redirect()->route('admin.quizzes.index')->with('success', 'Quiz updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $quiz = Quiz::find($id);

        $quiz->delete();

        // flash()->deleted('Quiz deleted successfully');

        return redirect()->back();
    }
}
