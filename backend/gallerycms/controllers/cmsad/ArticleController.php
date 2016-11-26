<?php

namespace backend\gallerycms\controllers\cmsad;

use backend\gallerycms\controllers\Article;

class ArticleController extends Article
{
    protected $modelClass = 'gallerycms\cmsad\models\Article';
    protected $modelSearchClass = 'gallerycms\cmsad\models\searchs\Article';

}
