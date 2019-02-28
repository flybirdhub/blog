<?php

namespace app\common\util;

use Firebase\JWT\JWT;

class Token
{
    public static function sign($data)
    {
        $now = time();
        $payload = array(
            'iat' => $now,
            'exp' => $now + config('token.expire'),
            'data' => $data
        );
        return JWT::encode($payload, config('token.key'));
    }

    public static function verify($str)
    {
        try {
            $decoded = JWT::decode($str, config('token.key'), array('HS256'));
            if ($decoded->exp > time()) {
                return $decoded->data;
            } else {
                return null;
            }
        } catch (\Exception $e) {
            return null;
        }
    }
}
