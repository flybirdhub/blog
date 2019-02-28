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
        return UserModel::get($cond);
    }
}
