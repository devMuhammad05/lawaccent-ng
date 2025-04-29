<?php

namespace App\Http\Requests\Faq;

use App\Rules\MaxWords;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateFaqRequest extends FormRequest
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
            'question' => ['required', 'string', new MaxWords(30)],
            'answer' => ['required', 'string', new MaxWords(200)],
            'show_on_home_page' => ['required', 'string', Rule::in([1, 0])],
            'status' => ['required', 'string', Rule::in([1, 0])],
        ];
    }
}
