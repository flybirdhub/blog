<?php

namespace app\common\repository\auth;

use app\common\model\auth\AuthRule as AuthRuleModel;

class R
{
    public function __construct(
        AuthRuleModel $authRuleModel
    )
    {
        $this->authRuleModel = $authRuleModel;
    }

    public function getAuth($cond)
    {
        return AuthRuleModel::where($cond)
            ->select();
    }
}
