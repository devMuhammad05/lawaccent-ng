<?php

namespace App\Http\Requests\Admin\Quiz;

use Illuminate\Foundation\Http\FormRequest;

class StoreQuizRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string',
            'sub_title' => 'required|string',
            'description' => 'nullable|string',
            'why_take_quiz' => 'nullable|string',

            'questions' => 'required|array|min:1',
            'questions.*.text' => 'required|string',
            'questions.*.options' => 'required|array|size:4',
            'questions.*.options.*.text' => 'required|string',
            'questions.*.correct_option' => 'required|in:0,1,2,3',
            'questions.*.explanation' => 'required|string',
        ];

    }
}
