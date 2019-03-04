<?php
namespace app\common\model\user;

use think\Model;

class User extends Model
{
    protected $hidden=['account','password'];

    public function profile()
    {
        return $this->hasOne('UserProfile')
            ->bind('nickname,avatar');
    }
}
