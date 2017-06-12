<?php

namespace baseapp\behaviors;

use yii\base\Behavior;
use yii\helpers\ArrayHelper;
use baseapp\merchant\models\Merchant;

class MerchantBehavior extends Behavior
{
    protected function getMerchantInfo()
    {
        $merchantId = $this->owner->merchant_id;
        if (empty($merchantId)) {
            return [];
        }

        return $this->merchantInfoByWhere(['id' => $merchantId]);
    }

    protected function merchantInfoByWhere($where)
    {
        $model = new Merchant();
        $info = $model->find()->where($where)->one();
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
}
