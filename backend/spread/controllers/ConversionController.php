<?php

namespace backend\spread\controllers;

use backend\components\AdminController;
use backend\components\ControllerViewTrait;

class ConversionController extends AdminController
{
    public $viewPrefix = '/conversion/';
    use ControllerViewTrait;
    protected $modelClass = 'common\models\spread\Conversion';
    protected $modelSearchClass = 'common\models\spread\searchs\Conversion';
}
