<?php

namespace app\api\controller;

use app\api\logic\article\ArticleInfo as ArticleInfoLogic;
use app\api\logic\article\ArticleSet as ArticleSetLogic;

class Article
{
    use \app\common\traits\Controller;

    public function __construct(
        ArticleInfoLogic $articleInfoLogic,
        ArticleSetLogic $articleSetLogic
    )
    {
        $this->articleInfoLogic = $articleInfoLogic;
        $this->articleSetLogic = $articleSetLogic;
    }

    public function info()
    {
        return self::httpResp($this->articleInfoLogic->info());
    }

    public function getHot()
    {
        return self::httpResp($this->articleSetLogic->hot());
    }
}
