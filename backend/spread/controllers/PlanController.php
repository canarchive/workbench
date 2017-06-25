<?php

namespace backend\spread\controllers;

use Yii;
use backend\components\AdminController;
use backend\components\ControllerTraitFull;

class PlanController extends AdminController
{
    protected $modelClass = 'spread\models\Plan';
    protected $modelSearchClass = 'spread\models\searchs\Plan';
    use ControllerTraitFull;
}
