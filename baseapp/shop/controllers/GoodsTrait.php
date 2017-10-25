<?php

namespace baseapp\shop\controllers;

use Yii;
use backend\components\AdminController;
use backend\components\ControllerTraitFull;

trait GoodsTrait
{
    use ControllerTraitFull;

    public $viewPrefix = '@backend/shop/views/goods/';

    protected function getAddView()
    {
        return '@backend/shop/views/' . $this->id . '/add';
    }

    protected function _addData()
    {
		return [
			'category_code' => Yii::$app->request->get('category_code'), 
		];
    }
}
