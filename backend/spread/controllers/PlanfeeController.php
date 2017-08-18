<?php

namespace backend\spread\controllers;

use backend\components\ControllerTraitFull;

class PlanfeeController extends Controller
{
    use ControllerTraitFull;
    protected $modelClass = 'spread\models\Planfee';
    protected $modelSearchClass = 'spread\models\searchs\Planfee';

    public function actionImport()
    {
    	return $this->_importInfo();
    }
}
