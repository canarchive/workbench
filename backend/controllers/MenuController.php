<?php

namespace backend\controllers;

use common\helpers\Tree;
use backend\components\AdminController;
use backend\components\ControllerFullTrait;

class MenuController extends AdminController
{
    protected $modelClass = 'backend\models\Menu';
    use ControllerFullTrait;

    public function behaviors()
    {
        return [];
    }

    public function actionListinfo()
    {
        $modelClass = $this->modelClass;
        return $this->_listinfoTree(new $modelClass());
    }
}
