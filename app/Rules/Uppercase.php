<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\Rule;

class Uppercase implements Rule 
{
    public function passes($attribute, $value)
    {
        if (empty($value)) {
            return false;
        }

        $firstCharacter = $value[0];
        return $firstCharacter === strtoupper($firstCharacter);
    }

    public function message()
    {
        return 'The title does not start with an uppercased letter';
    }
}
