<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class ValidEmailValidation implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (!filter_var($value, FILTER_VALIDATE_EMAIL)) {
            $fail('Invalid :attribute address format.');
        }else{
            $explode = explode("@", $value);
            $domain = $explode[1];
            if(!checkdnsrr($domain,"MX")) {
                $fail('Invalid :attribute address, domain email configuration is missing.');
            }
        }
    }
}
