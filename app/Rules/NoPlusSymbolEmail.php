<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\ValidationRule;

class NoPlusSymbolEmail implements ValidationRule
{
    public function validate($attribute, $value, $fail): void
    {
        if (str_contains($value, '+')) {
            $fail("The $attribute cannot contain the + symbol.");
        };
    }
}
