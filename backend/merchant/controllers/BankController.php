<?php

namespace backend\merchant\controllers;

use Yii;
use backend\components\AdminController;
use backend\components\ControllerFullTrait;

class BankController extends AdminController
{
    use ControllerFullTrait;
    protected $modelClass = 'merchant\models\Bank';
    protected $modelSearchClass = 'merchant\models\searchs\Bank';

    public function _addData()
    {
        return [
            'merchant_id' => Yii::$app->request->get('merchant_id', 0),
        ];
    }
}
