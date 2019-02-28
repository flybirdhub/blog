<?php

namespace app\api\logic\user;

use think\facade\Request;
use app\api\validate\User as UserValidate;
use app\common\util\Password as PasswordUtil;
use app\common\util\Token as TokenUtil;
use app\common\repository\user\C as UserCRepository;
use app\common\repository\user\R as UserRRepository;

class UserLogin
{
    public function __construct(
        UserRRepository $userRRepository,
        UserCRepository $userCRepository
    )
    {
        $this->userRRepository = $userRRepository;
        $this->userCRepository = $userCRepository;
    }

    public function register()
    {
        $validate = new UserValidate;
        $result = $validate->scene('register')->check(['account' => Request::param('account'), 'password' => Request::param('password')]);
        if ($result !== true) {
            return ['done' => false, 'code' => config('code.user.create.paramsRequire')];
        }
        return ['data' => $this->userCRepository->createUser(['account' => Request::param('account'), 'password' => PasswordUtil::sign(Request::param('password'))])];
    }

    public function login()
    {
        $validate = new UserValidate;
        $result = $validate->scene('login')->check(['account' => Request::param('account'), 'password' => Request::param('password')]);
        if ($result !== true) {
            return ['done' => false, 'code' => config('code.user.create.paramsRequire')];
        }
        $user = $this->userRRepository->getUser(['account' => Request::param('account')]);
        if (!isset($user->id)) {
            return ['done' => false, 'code' => config('code.user.login.no')];
        }
        if (!PasswordUtil::verify(Request::param('password'), $user->password)) {
            return ['done' => false, 'code' => config('code.user.login.error')];
        }
        return ['data' => TokenUtil::sign(['id' => $user->id])];
    }
}
