<?php

namespace backend\controllers;

use common\helpers\Tree;
use backend\components\ControllerTraitFull;

class MenuController extends Controller
{
    protected $modelClass = 'backend\models\Menu';
    use ControllerTraitFull;

    public function behaviors()
    {
        return [];
    }
}
