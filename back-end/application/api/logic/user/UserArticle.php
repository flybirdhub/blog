<?php

namespace app\api\logic\user;

use think\facade\Request;
use app\api\validate\Article as ArticleValidate;
use app\common\repository\article\C as ArticleCRepository;

class UserArticle
{
    public function __construct(
        ArticleCRepository $articleCRepository
    )
    {
        $this->articleCRepository = $articleCRepository;
    }

    public function create()
    {
        $validate = new ArticleValidate;
        $entity = ['user_id' => request()->user->id, 'title' => Request::param('title'), 'text' => Request::param('text')];
        $result = $validate->scene('create')->check($entity);
        if ($result !== true) {
            return ['done' => false, 'code' => config('code.article.create.paramsRequire')];
        }
        return ['data' => $this->articleCRepository->create($entity)];
    }
}
