<?php

namespace backend\merchant\controllers;

use common\helpers\Tree;
use backend\components\ControllerTraitFull;

class MenuController extends Controller
{
    use ControllerTraitFull;
    protected $modelClass = 'merchant\models\Menu';
    public $viewPrefix = '//menu/';

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
