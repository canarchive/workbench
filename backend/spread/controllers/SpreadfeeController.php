<?php

namespace backend\saccount\controllers;

use Yii;
use backend\components\AdminController;
use backend\components\ControllerFullTrait;

class SpreadfeeController extends AdminController
{
    protected $modelClass = 'spread\models\Spreadfee';
    protected $modelSearchClass = 'spread\models\searchs\Spreadfee';
    use ControllerFullTrait;
}
