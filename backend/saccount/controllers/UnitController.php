<?php

namespace backend\saccount\controllers;

use Yii;
use backend\components\AdminController;
use backend\components\ControllerFullTrait;

class UnitController extends AdminController
{
    protected $modelClass = 'spread\models\saccount\Unit';
    protected $modelSearchClass = 'spread\models\saccount\searchs\Unit';
    use ControllerFullTrait;
}
