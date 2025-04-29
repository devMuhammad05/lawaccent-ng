<?php

namespace App\Http\Requests\CaseStudy;

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
            'name' => ['required', 'string'],
            'thumbnail' => ['required', 'image'],
            'sector' => ['required', 'string'],
            'challenges' => ['required', 'string'],
            'services' => ['required', 'string'],
            'status' => ['required'],
        ];
    }
}
