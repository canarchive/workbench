<?php

namespace backend\statistic\controllers;

use backend\components\AdminController;
use backend\components\ControllerTraitView;

class ConversionController extends AdminController
{
    public $viewPrefix = '/conversion/';
    use ControllerTraitView;
    protected $modelClass = 'common\statistic\models\Conversion';
    protected $modelSearchClass = 'common\statistic\models\searchs\Conversion';
}
