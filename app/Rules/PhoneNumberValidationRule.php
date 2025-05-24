<?php

namespace App\Rules;

use Closure;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;
use Illuminate\Contracts\Validation\ValidationRule;

class PhoneNumberValidationRule implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string, ?string=): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        // $countryCode = request()->input('country_code');
        $phoneNumber = request()->input('phone_number');

        // $fullPhoneNumber = (string) $countryCode.$phoneNumber;
        $fullPhoneNumber = $phoneNumber;

        $url = 'https://phonevalidation.abstractapi.com/v1/?';
        $api_key = config('app.phone_number_verification_api_key');



        $res = Http::get((string) $url.'api_key='.$api_key.'&phone='.$fullPhoneNumber);
        $data = $res->json();

        Log::info('Phone number validation response', [
            'phone_number' => $fullPhoneNumber,
            'response' => $data,
        ]);

        // Check if the phone number is valid
        if ($data['valid'] === false) {
            $fail('The :attribute is not a valid phone number.');
        }
    }
}
