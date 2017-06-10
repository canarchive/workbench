<?php

namespace common\behaviors;

use yii\base\Behavior;
use yii\helpers\ArrayHelper;
use common\models\Merchant;

class MerchantBehavior extends Behavior
{
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
}
