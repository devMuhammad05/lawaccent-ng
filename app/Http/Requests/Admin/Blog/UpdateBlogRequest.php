<?php

namespace App\Http\Requests\Blog;

use App\Rules\MaxWords;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateBlogRequest extends FormRequest
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
            'title' => ['required', 'string'],
            'sub_heading' => ['required', 'string'],
            'thumbnail' => ['sometimes', 'image'],
            'short_body' => [
                'required',
                'string',
                new MaxWords(200),
            ],
            'body' => ['required', 'string'],
            'status' => ['required', Rule::in([1, 0])],
        ];
    }
}
