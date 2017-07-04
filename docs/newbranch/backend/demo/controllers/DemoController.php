<?php

namespace backend\demo\controllers;

use backend\components\AdminController;
use backend\components\ControllerFullTrait;

class DemoController extends AdminController
{
    protected $modelClass = 'demo\models\Demo';
    protected $modelSearchClass = 'demo\models\searchs\Demo';
    use ControllerFullTrait;
}
