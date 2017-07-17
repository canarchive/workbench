<?php

namespace backend\merchant\controllers;

use Yii;
use backend\components\AdminController;
use backend\components\ControllerTraitFull;

class SalemanController extends AdminController
{
    use ControllerTraitFull;
    protected $modelClass = 'merchant\models\Saleman';
    protected $modelSearchClass = 'merchant\models\searchs\Saleman';

}
