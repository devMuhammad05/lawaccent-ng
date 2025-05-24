<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Support\Facades\Http;
use Muhammad\CompanyEmailValidator\EmailValidator;

class EmailValidation implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string, ?string=): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        // $validator = new EmailValidator;

        // if (! $validator->isCompanyEmail($value)) {
        //     $emailDomain = substr(strrchr($value, '@'), 1);
        //     $fail("The :attribute cannot be from the '{$emailDomain}' domain. Please use a business email address.");

        //     return;
        // }

        $apiKey = config('app.email_verification_api_key');
        $response = Http::get('https://emailvalidation.abstractapi.com/v1/', [
            'api_key' => $apiKey,
            'email' => $value,
        ]);

        $data = $response->json();

        // \Log::info('Email validation response:', [
        //     'email' => $value,
        //     'response' => $data,
        // ]);

        if (
            ($data['deliverability'] ?? '') !== 'DELIVERABLE' ||
            ($data['is_disposable_email']['value'] ?? false) === true
        ) {
            $fail('The :attribute is not a valid email.');
        }
    }
}
