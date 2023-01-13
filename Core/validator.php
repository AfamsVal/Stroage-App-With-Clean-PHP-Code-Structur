<?php

namespace Core;

class Validator
{
    public static function string($str)
    {
        return strlen(trim($str)) === 0;
    }

    public static function validateEmail($email)
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }
}
