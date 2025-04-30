<?php

namespace App\Http\Requests\Admin\CaseStudy;

use Illuminate\Foundation\Http\FormRequest;

class StoreCaseStudyRequest extends FormRequest
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
            'case_study_category_id' => ['required', 'exists:case_study_categories,id'],
            'title' => ['required', 'string'],
            'thumbnail' => ['required', 'image'],
            'legal_issues_explored' => ['required', 'string'],
            'body' => ['required', 'string'],
        ];
    }
}
