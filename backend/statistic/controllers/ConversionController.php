<?php

namespace backend\statistic\controllers;

use backend\components\AdminController;
use backend\components\ControllerTraitView;

class ConversionController extends AdminController
{
    public $viewPrefix = '@backend/statistic/views/conversion/';
    use ControllerTraitView;
    protected $modelClass = 'baseapp\statistic\models\Conversion';
    protected $modelSearchClass = 'baseapp\statistic\models\searchs\Conversion';
}
