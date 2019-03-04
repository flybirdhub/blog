<?php
namespace app\api\controller;

use app\api\logic\user\UserLogin as UserLoginLogic;
use app\api\logic\user\UserProfile as UserProfileLogic;

class User
{
    use \app\common\traits\Controller;

    public function __construct(
        UserLoginLogic $userLoginLogic,
        UserProfileLogic $userProfileLogic
    )
    {
        $this->userLoginLogic = $userLoginLogic;
        $this->userProfileLogic = $userProfileLogic;
    }

    public function register()
    {
        return self::httpResp($this->userLoginLogic->register());
    }

    public function login()
    {
        return self::httpResp($this->userLoginLogic->login());
    }

    public function profile()
    {
        return self::httpResp($this->userProfileLogic->profile());
    }
}
