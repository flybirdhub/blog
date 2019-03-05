<?php

namespace app\common\model\user;

use think\Model;

class User extends Model
{
    protected $hidden = ['account', 'password'];

    public function profile()
    {
        return $this->hasOne('UserProfile')
            ->bind('nickname,avatar');
    }

    public function auth()
    {
        return $this->belongsToMany('app\\common\\model\\auth\\AuthGroup', 'app\\common\\model\\auth\\AuthUserAccessGroup', 'user_id', 'group_id');
    }
}
