<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class MaxWords implements ValidationRule
{
    public function __construct(private int $maxWords = 100)
    {
        //
    }

    /**
     * Run the validation rule.
     *
     * @param  \Closure(string, ?string=): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (str_word_count($value) > $this->maxWords) {
            $fail("The {$attribute} must not exceed {$this->maxWords} words.");
        }
    }

    public function message()
    {
        return "The :attribute must not exceed {$this->maxWords} words.";
    }
}
