<?php

namespace backend\saccount\controllers;

use Yii;
use backend\components\AdminController;
use backend\components\ControllerFullTrait;

class PlanController extends AdminController
{
    protected $modelClass = 'spread\models\saccount\Plan';
    protected $modelSearchClass = 'spread\models\saccount\searchs\Plan';
    use ControllerFullTrait;
}
