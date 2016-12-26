<?php

namespace backend\merchant\controllers;

use backend\components\AdminController;
use backend\components\ControllerFullTrait;

class WorkingController extends AdminController
{
    protected $modelClass = 'gallerycms\merchant\models\Working';
    protected $modelSearchClass = 'gallerycms\merchant\models\searchs\Working';
    public $showSubnav = false;
    use ControllerFullTrait;
    use MerchantInfoTrait;

    public function init()
    {
        parent::init();

		$this->_ownerInfo();
		$this->_initInfo();
    }

	protected function _addData()
	{
		$data = [
			'city_code' => isset($this->ownerInfo['city_code']) ? $this->ownerInfo['city_code'] : '',
			'merchant_id' => isset($this->ownerInfo['merchant_id']) ? $this->ownerInfo['merchant_id'] : '',
			'owner_id' => isset($this->ownerInfo['id']) ? $this->ownerInfo['id'] : '',
        ];
        return $data;
	}
}
