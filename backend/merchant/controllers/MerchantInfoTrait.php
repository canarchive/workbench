<?php

namespace backend\merchant\controllers;

use Yii;
use common\models\Company;
use gallerycms\merchant\models\Merchant;
use gallerycms\merchant\models\Owner;

trait MerchantInfoTrait
{
	public $companyInfo;
	public $merchantId;
	public $ownerInfo;
	public $owner_id;
	public $merchant_id;

    protected function _initInfo()
    {
	    $this->layout = 'main';
		$cityCode = Yii::$app->request->get('city_code', '');
		$companyModel = new Company();
		$this->companyInfo = $companyModel->getInfoByCode($cityCode);
		$this->owner_id = Yii::$app->request->get('owner_id');
		$this->merchant_id = Yii::$app->request->get('merchant_id');
	}

	protected function _ownerInfo()
	{
		$ownerId = Yii::$app->request->post('owner_id', 0);
		if (empty($ownerId)) {
		    $ownerId = Yii::$app->request->get('owner_id', 0);
		}

		$this->ownerInfo = Owner::findOne($ownerId);
	}
}
