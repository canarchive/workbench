<?php

namespace backend\gallerycms\controllers\shoot;

use backend\gallerycms\controllers\Category;

class CategoryController extends Category
{
    protected $modelClass = 'gallerycms\shoot\models\Category';
    protected $modelSearchClass = 'gallerycms\shoot\models\searchs\Category';

}
