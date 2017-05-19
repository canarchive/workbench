<?php

namespace backend\statistic\controllers;

use backend\components\AdminController;
use backend\components\ControllerViewTrait;

class VisitController extends AdminController
{
    public $viewPrefix = '/visit/';
    use ControllerViewTrait;
    protected $modelClass = 'common\models\statistic\Visit';
    protected $modelSearchClass = 'common\models\statistic\searchs\Visit';
}
