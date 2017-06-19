<?php

namespace backend\statistic\controllers;

use backend\components\AdminController;
use backend\components\ControllerTraitView;

class VisitController extends AdminController
{
    use ControllerTraitView;
    public $viewPrefix = '@backend/statistic/views/visit/';
    protected $modelClass = 'baseapp\statistic\models\Visit';
    protected $modelSearchClass = 'baseapp\statistic\models\searchs\Visit';
}
