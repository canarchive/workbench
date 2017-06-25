<?php

namespace backend\spread\controllers;

use Yii;
use backend\components\AdminController;
use backend\components\ControllerTraitFull;

class SpreadfeeController extends AdminController
{
    protected $modelClass = 'spread\models\Spreadfee';
    protected $modelSearchClass = 'spread\models\searchs\Spreadfee';
    use ControllerTraitFull;
}
