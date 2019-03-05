<?php

namespace app\common\repository\article;

use app\common\model\article\Article as ArticleModel;

class C
{
    public function __construct(
        ArticleModel $articleModel
    )
    {
        $this->articleModel = $articleModel;
    }

    public function create($entity)
    {
        $this->articleModel->data($entity);
        $this->articleModel->save();
        return $this->articleModel->id;
    }
}
