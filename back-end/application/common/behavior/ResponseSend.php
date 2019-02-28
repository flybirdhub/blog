<?php

namespace app\common\behavior;

use think\Request;
use app\common\util\Token;

class ResponseSend
{
    public function run(Request $request, $params)
    {
        if (isset($request->user)) {
            header('x-access-token:' . Token::sign(json_decode(json_encode($request->user), true)));
        }
    }
}
