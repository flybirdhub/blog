<?php
namespace app\api\controller;

use app\api\logic\user\UserLogin as UserLoginLogic;

class User
{
    use \app\common\traits\Controller;

    public function __construct(
        UserLoginLogic $userLoginLogic
    )
    {
        $this->userLoginLogic = $userLoginLogic;
    }

    public function register()
    {
        return self::httpResp($this->userLoginLogic->register());
    }

    public function login()
    {
        return self::httpResp($this->userLoginLogic->login());
    }
}
