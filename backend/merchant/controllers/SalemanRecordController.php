<?php

namespace backend\merchant\controllers;

use Yii;
use backend\components\AdminController;
use backend\components\ControllerTraitFull;

class SalemanRecordController extends AdminController
{
    use ControllerTraitFull;
    protected $modelClass = 'merchant\models\SalemanRecord';
    protected $modelSearchClass = 'merchant\models\searchs\SalemanRecord';

}
