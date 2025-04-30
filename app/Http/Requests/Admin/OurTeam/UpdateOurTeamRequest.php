<?php

namespace App\Http\Requests\Admin\OurTeam;

use Illuminate\Foundation\Http\FormRequest;

class UpdateOurTeamRequest extends FormRequest
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
            'image_path' => ['sometimes', 'image'],
            'full_name' => ['required', 'string'],
            'role' => ['required', 'string'],
            'linkedin_url' => ['required', 'url'],
        ];
    }
}
