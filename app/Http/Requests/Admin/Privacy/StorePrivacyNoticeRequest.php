<?php

namespace App\Http\Requests\Admin\Privacy;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class StorePrivacyNoticeRequest extends FormRequest
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
            'question' => ['required', 'string', 'max:100'],
            'answer' => ['required', 'string'],
            'status' => ['required', 'string', Rule::in([1, 0])],
        ];
    }
}
