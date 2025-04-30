<?php

namespace App\Enums;

enum ConsultationTypes: string
{
    case Virtual = 'virtual';
    case InPerson = 'in-person';

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}
