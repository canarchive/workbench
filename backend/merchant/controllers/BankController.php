<?php

namespace backend\merchant\controllers;

use Yii;
use backend\components\AdminController;
use backend\components\ControllerFullTrait;

class BankController extends AdminController
{
    protected $modelClass = 'merchant\models\Bank';
    protected $modelSearchClass = 'merchant\models\searchs\Bank';
    use ControllerFullTrait;

    public function _addData()
    {
        return [
            'merchant_id' => Yii::$app->request->get('merchant_id', 0),
        ];
    }
}
