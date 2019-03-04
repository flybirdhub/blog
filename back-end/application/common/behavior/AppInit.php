<?php

namespace app\common\behavior;

use think\Request;

class AppInit
{
    public function run(Request $request, $params)
    {
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Headers: Authorization, Content-Type, If-Match, If-Modified-Since, If-None-Match, If-Unmodified-Since, X-Requested-With, x-access-token');
        header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE');
        header('Access-Control-Max-Age: 1728000');
        header("Access-Control-Expose-Headers: x-access-token");
        if (strtoupper($_SERVER['REQUEST_METHOD']) == 'OPTIONS') {
            exit;
        }
    }
}
