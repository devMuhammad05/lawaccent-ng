<?php

namespace App\Http\Requests\Web;

use App\Rules\EmailValidation;
use App\Rules\PhoneNumberValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreScholarshipApplication extends FormRequest
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
            'name' => 'required|string|max:255|min:3',
            'email' => ['required', 'email:rfc,dns,spoof', new EmailValidation],
            'phone_number' => ['required', 'string', 'max:15', new PhoneNumberValidationRule],
            'eligibility_status' => 'required',
            'graduation_date' => 'required|date',
            'degree_classification' => 'required|string',
            'cgpa' => 'required|numeric',
            'previously_selected_for_scholarship' => 'required|string',
            'scholarship_details' => 'nullable|max:150',
            'transcript_doc' => 'required|file|mimes:pdf,doc,docx|max:5048',
            'essay_doc' => 'required|file|mimes:pdf,doc,docx|max:5048',
            'cv_doc' => 'required|file|mimes:pdf,doc,docx|max:5048',
            'application_consent' => 'accepted',
            'information_consent' => 'accepted',
            'checkbox' => 'accepted',
        ];
    }
}
