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
}
