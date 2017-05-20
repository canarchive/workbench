<?php

namespace backend\statistic\controllers;

use backend\components\AdminController;
use backend\components\ControllerTraitView;

class VisitController extends AdminController
{
    public $viewPrefix = '/visit/';
    use ControllerTraitView;
    protected $modelClass = 'common\models\statistic\Visit';
    protected $modelSearchClass = 'common\models\statistic\searchs\Visit';
}
