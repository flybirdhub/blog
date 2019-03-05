<?php

namespace app\api\controller;

use app\api\logic\user\UserLogin as UserLoginLogic;
use app\api\logic\user\UserProfile as UserProfileLogic;
use app\api\logic\user\UserAuth as UserAuthLogic;
use app\api\logic\user\UserArticle as UserArticleLogic;

class User
{
    use \app\common\traits\Controller;

    public function __construct(
        UserLoginLogic $userLoginLogic,
        UserProfileLogic $userProfileLogic,
        UserAuthLogic $userAuthLogic,
        UserArticleLogic $userArticleLogic
    )
    {
        $this->userLoginLogic = $userLoginLogic;
        $this->userProfileLogic = $userProfileLogic;
        $this->userAuthLogic = $userAuthLogic;
        $this->userArticleLogic = $userArticleLogic;
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

    public function checkAuth()
    {
        return self::httpResp($this->userAuthLogic->check());
    }

    public function createArticle()
    {
        return self::httpResp($this->userArticleLogic->create());
    }
}
