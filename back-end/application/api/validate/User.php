<?php

namespace app\api\validate;

use think\Validate;

class User extends Validate
{
    protected $rule = [
        'account' => 'require',
        'password' => 'require'
    ];
    protected $message = [
        'account.require' => '账号不能为空',
        'password.require' => '密码不能为空'
    ];
    protected $scene = [
        'register' => ['account', 'password'],
        'login' => ['account', 'password']
    ];
}
