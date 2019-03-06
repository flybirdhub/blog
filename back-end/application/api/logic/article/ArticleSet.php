<?php

namespace app\api\logic\article;

use think\facade\Request;
use app\common\repository\article\R as ArticleRRepository;

class ArticleSet
{
    public function __construct(
        ArticleRRepository $articleRRepository
    )
    {
        $this->articleRRepository = $articleRRepository;
    }

    public function hot()
    {
        $pageIndex = Request::param('index');
        $pageSize = Request::param('size');
        if (!$pageIndex || !$pageSize) {
            return ['done' => false, 'code' => config('code.article.page.paramsRequire')];
        }
        $pageData = $this->articleRRepository->getArticlesWithPage([], ['view_count' => 'desc'], ['index' => $pageIndex, 'size' => $pageSize]);
        return ['data' => $pageData['list'], 'page' => ['index' => $pageIndex, 'size' => $pageSize, 'count' => $pageData['count']]];
    }
}
