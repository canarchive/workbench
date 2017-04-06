<?php

namespace backend\merchant\controllers;

use Yii;
use backend\components\AdminController;
use backend\components\ControllerFullTrait;

class DesignerController extends AdminController
{
    protected $modelClass = 'gallerycms\merchant\models\Designer';
    protected $modelSearchClass = 'gallerycms\merchant\models\searchs\Designer';
    public $showSubnav = false;
    use ControllerFullTrait;
    use MerchantInfoTrait;

    public function init()
    {
        parent::init();

		$this->_initInfo();
    }

	protected function _addData()
	{
		$data = [
			'merchant_id' => Yii::$app->request->get('merchant_id', 0),
			'city_code' => isset($this->companyInfo['code']) ? $this->companyInfo['code'] : '',
        ];
        return $data;
	}
}
