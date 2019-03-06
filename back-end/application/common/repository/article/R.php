<?php

namespace app\common\repository\article;

use app\common\model\article\Article as ArticleModel;

class R
{
    public function __construct(
        ArticleModel $articleModel
    )
    {
        $this->articleModel = $articleModel;
    }

    public function getArticle($cond)
    {
        return ArticleModel::where($cond)
            ->find();
    }

    public function getArticles($cond)
    {
        return ArticleModel::where($cond)
            ->select();
    }

    public function getArticlesWithPage($cond, $order, $page)
    {
        $count = count(ArticleModel::where($cond)
            ->select());
        $list = ArticleModel::where($cond)
            ->order($order)
            ->limit($page['size'])
            ->page($page['index'])
            ->select();
        return ['count' => $count, 'list' => $list];
    }
}
