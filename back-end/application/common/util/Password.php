<?php

namespace app\common\util;

class Password
{
    public static function sign($password)
    {
        return password_hash($password, PASSWORD_DEFAULT);
    }

    public static function verify($password, $hashPassword)
    {
        return password_verify($password, $hashPassword);
    }
}
