<?php

namespace App\Http\Requests\Web;

use App\Rules\EmailValidation;
use App\Rules\PhoneNumberValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreWebinarApplication extends FormRequest
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
            'name' => ['required', 'max:255', 'string'],
            'email' => ['required', 'email:rfc,dns,spoof', new EmailValidation],
            'phone_number' => ['required', 'string', 'max:15', new PhoneNumberValidationRule],
            'question' => ['nullable', 'max:400'],
            'type' => 'required|in:Virtual,In Person',
        ];
    }
}
