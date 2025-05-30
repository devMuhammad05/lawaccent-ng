<?php

namespace App\Http\Requests\Admin\Webinar;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePastWebinar extends FormRequest
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
            'title' => ['required', 'max:255', 'string'],
            'topic' => ['required', 'max:255', 'string'],
            'recording_url' => ['required', 'max:255'],
            'material_link' => ['nullable','max:255', 'url'],
        ];
    }
}
