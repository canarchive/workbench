<?php

namespace backend\saccount\controllers;

use Yii;
use backend\components\AdminController;
use backend\components\ControllerFullTrait;

class KeywordController extends AdminController
{
    protected $modelClass = 'spread\models\Keyword';
    protected $modelSearchClass = 'spread\models\searchs\Keyword';
    use ControllerFullTrait;
}
