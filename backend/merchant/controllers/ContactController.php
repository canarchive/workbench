<?php

namespace backend\merchant\controllers;

use Yii;
use backend\components\ControllerTraitFull;

class ContactController extends Controller
{
    use ControllerTraitFull;
    protected $modelClass = 'merchant\models\Contact';
    protected $modelSearchClass = 'merchant\models\searchs\Contact';

	protected function _addData()
	{
		$data = [
			'merchant_id' => Yii::$app->request->get('merchant_id', 0),
        ];
        return $data;
	}
}
