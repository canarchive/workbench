<?php

namespace baseapp\behaviors;

use yii\base\Behavior;
use yii\helpers\ArrayHelper;
use baseapp\merchant\models\Merchant;

class MerchantBehavior extends Behavior
{
    public function getMerchantInfo()
    {
        $merchantId = $this->owner->merchant_id;
        if (empty($merchantId)) {
            return [];
        }

        return $this->merchantInfoPoint($merchantId);
    }

    public function merchantInfoPoint($where)
    {
        $model = new Merchant();
        $where = is_array($where) ? $where : ['id' => $where];
        $info = $model->find()->where($where)->one();
        return $info;
    }

    public function getMerchantInfos()
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
