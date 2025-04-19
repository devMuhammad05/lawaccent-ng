<?php

namespace App\Enums\Enums;

enum Eligibility : string
{
    case ELIGIBLE = 'eligible';
    case NOT_ELIGIBLE = 'not_eligible';
    case PARTIALLY = 'partially_eligible';

    public static function values(): array
    {
        return array_column(Eligibility::cases(), 'value');
    }
}

