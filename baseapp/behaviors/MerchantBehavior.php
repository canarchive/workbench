<?php

namespace common\behaviors;

use yii\base\Behavior;
use yii\helpers\ArrayHelper;
use common\models\Merchant;

class MerchantBehavior extends Behavior
{
    protected function getMerchantInfo()
    {
        $merchantId = $this->owner->merchant_id;
        if (empty($merchantId)) {
            return [];
        }

        $model = new Merchant();
        $info = $model->findOne($merchantId);
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
