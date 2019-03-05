<?php

namespace app\common\repository\user;

use app\common\model\user\User as UserModel;

class R
{
    public function _construct(
        UserModel $userModel
    )
    {
        $this->userModel = $userModel;
    }

    public function getUser($cond)
    {
        return UserModel::where($cond)
            ->find();
    }

    public function getUserProfile($cond)
    {
        return UserModel::with(['profile'])
            ->where($cond)
            ->find();
    }

    public function getUserAuth($cond)
    {
        return UserModel::with(['auth'])
            ->where($cond)
            ->find();
    }
}
