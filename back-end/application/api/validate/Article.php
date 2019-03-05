<?php

namespace app\api\validate;

use think\Validate;

class Article extends Validate
{
    protected $rule = [
        'title' => 'require',
        'text' => 'require'
    ];
    protected $message = [
        'title.require' => '文章标题不能为空',
        'text.require' => '文章内容不能为空'
    ];
    protected $scene = [
        'create' => ['title', 'text']
    ];
}
