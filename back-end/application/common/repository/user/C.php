<?php

namespace app\common\repository\user;

use app\common\model\user\User as UserModel;

class C
{
    public function __construct(
        UserModel $userModel
    )
    {
        $this->userModel = $userModel;
    }

    public function createUser($entity)
    {
        $this->userModel->data($entity);
        $this->userModel->save();
        return $this->userModel->id;
    }
}
