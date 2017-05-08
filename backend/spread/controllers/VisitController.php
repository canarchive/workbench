<?php

namespace backend\spread\controllers;

use backend\components\AdminController;
use backend\components\ControllerViewTrait;

class VisitController extends AdminController
{
    public $viewPrefix = '/visit/';
    use ControllerViewTrait;
    protected $modelClass = 'spread\models\Visit';
    protected $modelSearchClass = 'spread\models\searchs\Visit';
}
