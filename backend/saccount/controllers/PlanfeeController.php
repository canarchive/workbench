<?php

namespace backend\saccount\controllers;

use Yii;
use backend\components\AdminController;
use backend\components\ControllerFullTrait;
use backend\saccount\controllers\ImportController;

class PlanfeeController extends AdminController
{
    protected $modelClass = 'spread\models\saccount\Planfee';
    protected $modelSearchClass = 'spread\models\saccount\searchs\Planfee';
    use ControllerFullTrait;

    public function actionImport()
    {
    	return $this->_importInfo();
    }
}
