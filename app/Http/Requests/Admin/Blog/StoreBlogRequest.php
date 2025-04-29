<?php

namespace App\Http\Requests\Admin\Blog;

use App\Rules\MaxWords;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreBlogRequest extends FormRequest
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
            'category_id' => ['required', 'exists:blog_categories,id'],
            'title' => ['required', 'string'],
            'sub_heading' => ['required', 'string'],
            'thumbnail' => ['required', 'image'],
            'short_body' => [
                'required',
                new MaxWords(200),
            ],
            'body' => ['required', 'string'],
            'status' => ['required', Rule::in([1, 0])],
        ];
    }
}
