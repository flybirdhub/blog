<?php

namespace app\api\controller;

use app\api\logic\article\ArticleInfo as ArticleInfoLogic;

class Article
{
    use \app\common\traits\Controller;

    public function __construct(
        ArticleInfoLogic $articleInfoLogic
    )
    {
        $this->articleInfoLogic = $articleInfoLogic;
    }

    public function info()
    {
        return self::httpResp($this->articleInfoLogic->info());
    }
}
