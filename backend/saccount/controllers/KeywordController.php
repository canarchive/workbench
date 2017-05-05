<?php

namespace backend\saccount\controllers;

use Yii;
use backend\components\AdminController;
use backend\components\ControllerFullTrait;

class KeywordController extends AdminController
{
    protected $modelClass = 'spread\models\saccount\Keyword';
    protected $modelSearchClass = 'spread\models\saccount\searchs\Keyword';
    use ControllerFullTrait;
}
