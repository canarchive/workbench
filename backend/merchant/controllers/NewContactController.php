<?php

namespace backend\merchant\controllers;

use Yii;
use backend\components\AdminController;
use backend\components\ControllerTraitFull;

class NewContactController extends AdminController
{
    use ControllerTraitFull;
    protected $modelClass = 'merchant\models\NewContact';
    protected $modelSearchClass = 'merchant\models\searchs\NewContact';

	protected function _addData()
	{
		$data = [
			'merchant_id' => Yii::$app->request->get('merchant_id', 0),
        ];
        return $data;
	}
}
