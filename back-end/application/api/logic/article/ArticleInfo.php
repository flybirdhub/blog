<?php

namespace app\api\logic\article;

use think\facade\Request;
use app\common\repository\article\R as ArticleRRepository;

class ArticleInfo
{
    public function __construct(
        ArticleRRepository $articleRRepository
    )
    {
        $this->articleRRepository = $articleRRepository;
    }

    public function info()
    {
        if (!Request::param('id')) {
            return ['done' => false, 'code' => config('code.article.info.paramsRequire')];
        }
        return ['data' => $this->articleRRepository->getArticle(['id' => Request::param('id')])];
    }
}
