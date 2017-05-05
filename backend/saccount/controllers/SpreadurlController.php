<?php

namespace backend\saccount\controllers;

use Yii;
use backend\components\AdminController;
use backend\components\ControllerFullTrait;

class SpreadurlController extends AdminController
{
    protected $modelClass = 'spread\models\saccount\Spreadurl';
    protected $modelSearchClass = 'spread\models\saccount\searchs\Spreadurl';
    use ControllerFullTrait;
}
