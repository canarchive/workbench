<?php

namespace backend\spread\controllers;

use backend\components\AdminController;
use backend\components\ControllerViewTrait;

class VisitController extends AdminController
{
    public $viewPrefix = '/visit/';
    use ControllerViewTrait;
    protected $modelClass = 'common\models\spread\Visit';
    protected $modelSearchClass = 'common\models\spread\searchs\Visit';
}
