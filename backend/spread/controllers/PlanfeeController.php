<?php

namespace backend\spread\controllers;

use Yii;
use backend\components\AdminController;
use backend\components\ControllerFullTrait;
use backend\spread\controllers\ImportController;

class PlanfeeController extends AdminController
{
    protected $modelClass = 'spread\models\Planfee';
    protected $modelSearchClass = 'spread\models\searchs\Planfee';
    use ControllerFullTrait;

    public function actionImport()
    {
    	return $this->_importInfo();
    }
}
