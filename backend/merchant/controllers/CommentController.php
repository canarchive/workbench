<?php

namespace backend\merchant\controllers;

use backend\components\AdminController;
use backend\components\ControllerFullTrait;

class CommentController extends AdminController
{
	protected $modelClass = 'merchant\models\Comment';
	protected $modelSearchClass = 'merchant\models\searchs\Comment';
    use ControllerFullTrait;

    public function _addData()
    {
		return [
            'merchant_id' => Yii::$app->request->get('merchant_id', 0),
		];
    }
}
