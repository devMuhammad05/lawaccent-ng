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
                'description' => $data['description'] ?? null,
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
