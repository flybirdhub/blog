<?php

namespace app\api\logic\user;

use app\common\repository\user\R as UserRRepository;

class UserProfile
{
    public function __construct(
        UserRRepository $userRRepository
    )
    {
        $this->userRRepository = $userRRepository;
    }

    public function profile()
    {
        return ['data' => $this->userRRepository->getUserProfile(['id' => request()->user->id])];
    }
}
