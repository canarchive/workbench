<?php

namespace backend\gallerycms\controllers\cmsad;

use backend\gallerycms\controllers\Category;

class CategoryController extends Category
{
    protected $modelClass = 'gallerycms\cmsad\models\Category';
    protected $modelSearchClass = 'gallerycms\cmsad\models\searchs\Category';

}
