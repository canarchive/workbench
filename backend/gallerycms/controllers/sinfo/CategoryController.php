<?php

namespace backend\gallerycms\controllers\eale;

use backend\gallerycms\controllers\Category;

class CategoryController extends Category
{
    protected $modelClass = 'gallerycms\eale\models\Category';
    protected $modelSearchClass = 'gallerycms\eale\models\searchs\Category';

}
