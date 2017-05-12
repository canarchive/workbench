<?php

namespace common\models;

use Yii;
use yii\helpers\ArrayHelper;
use merchant\models\Merchant;
use merchant\models\Service;

class MerchantSpreadModel extends BaseModel
{
    public static function getDb()
    {
        return Yii::$app->dbMerchant;
    }    

    protected function getMerchantInfo()
    {
        if (empty($this->merchant_id)) {
            return [];
        }

        $model = new Merchant();
        $info = $model->findOne($this->merchant_id);
        return $info;
    }

    protected function getMerchantInfos()
    {
        $infos = ArrayHelper::map(Merchant::find()->select('id, name')->all(), 'id', 'name');
        return $infos;
    }

    public function getMerchantAllInfos()
    {
        $infos = Merchant::find()->indexBy('id')->all();
        return $infos;
    }

    public function getServiceInfos()
    {
        $model = new Service();
        $infos = $model->find()->indexBy('id')->all();
        return $infos;
    }

    protected function getServiceInfo()
    {
        if (!isset($this->service_id) || empty($this->service_id)) {
            return [];
        }

        $model = new Service();
        $info = $model->findOne($this->service_id);
        return $info;
    }
}
