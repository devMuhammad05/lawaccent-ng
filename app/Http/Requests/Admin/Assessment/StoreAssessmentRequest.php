<?php

namespace App\Http\Requests\Admin\Assessment;

use Illuminate\Foundation\Http\FormRequest;

class StoreAssessmentRequest extends FormRequest
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
            'description' => 'required|string',
            // 'thumbnail' => ['nullable', 'image'],
            'status' => 'boolean|in:0,1',

            'questions' => 'required|array|min:1',
            'questions.*.text' => 'required|string',
            'questions.*.head' => 'required|string',
            'questions.*.options' => 'required|array|size:2',
            'questions.*.options.*.text' => 'required|string',
            'questions.*.correct_option' => 'required|in:0,1,',
        ];
    }
}
