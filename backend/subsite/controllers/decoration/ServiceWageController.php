<?php

namespace backend\subsite\controllers\decoration;

use backend\components\AdminController;
use backend\components\ControllerTraitFull;

class ServiceWageController extends AdminController
{
    use ControllerTraitFull;
    public $viewPrefix = '@backend/subsite/views/decoration/service-wage/';
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
