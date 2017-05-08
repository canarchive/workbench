<?php

namespace backend\spread\controllers;

use backend\components\AdminController;
use backend\components\ControllerViewTrait;

class ConversionController extends AdminController
{
    public $viewPrefix = '/conversion/';
    use ControllerViewTrait;
    protected $modelClass = 'spread\models\Conversion';
    protected $modelSearchClass = 'spread\models\searchs\Conversion';
}
