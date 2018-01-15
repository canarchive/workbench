<?php

namespace backend\saccount\controllers;

use Yii;
use backend\components\AdminController;
use backend\components\ControllerFullTrait;

class SpreadfeeController extends AdminController
{
    protected $modelClass = 'spread\models\saccount\Spreadfee';
    protected $modelSearchClass = 'spread\models\saccount\searchs\Spreadfee';
    use ControllerFullTrait;
}
