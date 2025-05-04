<?php

namespace App\Http\Requests\Admin\JobOpening;

use Illuminate\Foundation\Http\FormRequest;

class StoreJobOpeningRequest extends FormRequest
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
            'role' => ['required', 'string', 'max:255'],
            'location' => ['required', 'string', 'max:255'],
            'application_link' => ['required', 'url', 'max:100'],
        ];
    }
}
