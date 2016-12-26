<?php

namespace backend\merchant\controllers;

use backend\components\AdminController;
use backend\components\ControllerFullTrait;

class MerchantController extends AdminController
{
    protected $modelClass = 'gallerycms\merchant\models\Merchant';
    protected $modelSearchClass = 'gallerycms\merchant\models\searchs\Merchant';
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
			'city_code' => isset($this->companyInfo['code']) ? $this->companyInfo['code'] : '',
        ];
        return $data;
	}
}
