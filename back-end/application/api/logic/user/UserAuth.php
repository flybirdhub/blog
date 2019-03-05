<?php

namespace app\api\logic\user;

use think\facade\Request;
use app\common\repository\user\R as UserRRepository;
use app\common\repository\auth\R as AuthRRepository;

class UserAuth
{
    public function __construct(
        UserRRepository $userRRepository,
        AuthRRepository $authRRepository
    )
    {
        $this->userRRepository = $userRRepository;
        $this->authRRepository = $authRRepository;
    }

    public function check()
    {
        if (!Request::param('rule')) {
            return ['done' => false, 'code' => config('code.user.auth.no')];
        }
        $twoDimArrAuth = $this->userRRepository->getUserAuth(['id' => request()->user->id])->auth->toArray();
        if (empty($twoDimArrAuth)) {
            return ['done' => false, 'code' => config('code.user.auth.limit')];
        }
        $arrRuleIds = [];
        foreach (array_map(function ($i) {
            return explode('|', $i['rule_ids']);
        }, $twoDimArrAuth) as $value) {
            $arrRuleIds = array_merge($arrRuleIds, $value);
        };
        $arrRuleName = array_map(function($i){
            return $i['rule'];
        },$this->authRRepository->getAuth(['id' => $arrRuleIds])->toArray());
        if (!in_array(Request::param('rule'), $arrRuleName)) {
            return ['done' => false, 'code' => config('code.user.auth.limit')];
        }
        return [];
    }
}
