<?php

namespace backend\gallerycms\controllers\house;

use backend\gallerycms\controllers\Article;

class ArticleController extends Article
{
    protected $modelClass = 'gallerycms\house\models\Article';
    protected $modelSearchClass = 'gallerycms\house\models\searchs\Article';

}
