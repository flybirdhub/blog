<?php

namespace app\api\logic\user;

use think\facade\Request;
use app\api\validate\Article as ArticleValidate;
use app\common\repository\article\C as ArticleCRepository;
use app\common\repository\article\R as ArticleRRepository;

class UserArticle
{
    public function __construct(
        ArticleCRepository $articleCRepository,
        ArticleRRepository $articleRRepository
    )
    {
        $this->articleCRepository = $articleCRepository;
        $this->articleRRepository = $articleRRepository;
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

    public function getArticles()
    {
        return ['data' => $this->articleRRepository->getArticles(['user_id' => request()->user->id])];
    }
}
