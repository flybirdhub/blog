<?php

namespace app\common\middleware;

use app\common\util\Token;

class Auth
{
    use \app\common\traits\Controller;

    public function handle($request, \Closure $next, $except)
    {
        $header = $request->header();
        $controller = strtolower($request->controller());
        $action = strtolower($request->action());
        if (isset($except[$controller]) && in_array($action, $except[$controller])) {
            return $next($request);
        }
        if (!isset($header['x-access-token'])) {
            return self::httpResp(array('code' => config('code.token.no'), 'done' => false));
        }
        if (!Token::verify($header['x-access-token'])) {
            return self::httpResp(array('code' => config('code.token.no'), 'done' => false));
        }
        $request->user = Token::verify($header['x-access-token']);
        return $next($request);
    }
}
