<?php

namespace backend\subsite\controllers\decoration;

use backend\components\ControllerTraitFull;

class ServiceWageController extends Controller
{
    use ControllerTraitFull;
    protected $modelClass = 'subsite\decoration\models\ServiceWage';
    protected $modelSearchClass = 'subsite\decoration\models\searchs\ServiceWage';

    public function actionAdd()
    {
        $modelClass = $this->modelClass;
        $model = new $modelClass();
        $model->updateWage();
        exit();
    }
}
