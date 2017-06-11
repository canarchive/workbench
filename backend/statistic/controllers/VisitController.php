<?php

namespace backend\statistic\controllers;

use backend\components\AdminController;
use backend\components\ControllerTraitView;

class VisitController extends AdminController
{
    public $viewPrefix = '/visit/';
    use ControllerTraitView;
    protected $modelClass = 'baseapp\statistic\models\Visit';
    protected $modelSearchClass = 'baseapp\statistic\models\searchs\Visit';
}
