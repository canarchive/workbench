<?php

namespace merchant\models\searchs;

use Yii;
use merchant\models\MerchantPond as MerchantPondModel;

class MerchantPond extends MerchantPondModel
{
    use MerchantTrait;
    public $managerRole;
    public $salemanId;
    public $salemanInfo;
    public $managerInfo;

    public function init()
    {
        parent::init();

        $this->managerInfo = isset(Yii::$app->params['managerInfo']) ? Yii::$app->params['managerInfo'] : false;
        $this->salemanInfo = isset(Yii::$app->params['salemanInfo']) ? Yii::$app->params['salemanInfo'] : false;
        $this->managerRole = isset($this->managerInfo['role']) ? $this->managerInfo['role'] : false;
        $this->salemanId = isset($this->salemanInfo['id']) ? $this->salemanInfo['id'] : false;
    }
}
