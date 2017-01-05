<?php

namespace backend\gallerycms\controllers\house;

use backend\gallerycms\controllers\Category;

class CategoryController extends Category
{
    protected $modelClass = 'gallerycms\house\models\Category';
    protected $modelSearchClass = 'gallerycms\house\models\searchs\Category';

}
