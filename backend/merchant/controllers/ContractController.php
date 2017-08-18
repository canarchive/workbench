<?php

namespace backend\merchant\controllers;

use Yii;
use backend\components\ControllerTraitFull;

class ContractController extends Controller
{
    use ControllerTraitFull;
    protected $modelClass = 'merchant\models\Contract';
    protected $modelSearchClass = 'merchant\models\searchs\Contract';

	protected function _addData()
	{
		$data = [
			'merchant_id' => Yii::$app->request->get('merchant_id', 0),
        ];
        return $data;
	}
}
