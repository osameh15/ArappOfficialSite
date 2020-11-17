<?php

namespace Badzohreh\User\Rules;

use Illuminate\Contracts\Validation\Rule;

class ValidMobileRule implements Rule
{
    public function __construct()
    {
    }

    public function passes($attribute, $value)
    {
        return preg_match("/^09[0-9]{9}$/", $value);


    }

    public function message()
    {
        return 'شماره موبایل نا معتبر است.';
    }
}
