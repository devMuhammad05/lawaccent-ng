<?php

namespace App\Http\Requests\Web;

use App\Rules\EmailValidation;
use App\Rules\PhoneNumberValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreConsultationRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'email' => ['required', 'email:rfc,dns,spoof', new EmailValidation],
            'phone_number' => ['required', 'string', 'max:15', new PhoneNumberValidationRule],
            'type' => 'required|in:Virtual,In Person',
            'legal_concerns' => 'nullable',
            'date' => 'required|date|after_or_equal:today',
            'additional_info' => 'nullable|string|max:1000',
            'g-recaptcha-response' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'g-recaptcha-response.required' => 'Please verify that you are not a robot.',
            'g-recaptcha-response.recaptchav3' => 'ReCAPTCHA verification failed. Please try again.',
        ];
    }
}

