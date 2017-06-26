<?php

namespace backend\merchant\controllers;

use Yii;
use backend\components\AdminController;
use backend\components\ControllerTraitFull;

class BankController extends AdminController
{
    use ControllerTraitFull;
    protected $modelClass = 'merchant\models\Bank';
    protected $modelSearchClass = 'merchant\models\searchs\Bank';

    public function _addData()
    {
        return [
            'merchant_id' => Yii::$app->request->get('merchant_id', 0),
        ];
    }
}
