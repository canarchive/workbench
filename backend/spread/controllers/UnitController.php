<?php

namespace backend\spread\controllers;

use Yii;
use backend\components\AdminController;
use backend\components\ControllerFullTrait;

class UnitController extends AdminController
{
    protected $modelClass = 'spread\models\Unit';
    protected $modelSearchClass = 'spread\models\searchs\Unit';
    use ControllerFullTrait;
}
