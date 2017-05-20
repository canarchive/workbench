<?php

namespace backend\statistic\controllers;

use backend\components\AdminController;
use backend\components\ControllerTraitView;

class ConversionController extends AdminController
{
    public $viewPrefix = '/conversion/';
    use ControllerTraitView;
    protected $modelClass = 'common\models\statistic\Conversion';
    protected $modelSearchClass = 'common\models\statistic\searchs\Conversion';
}
