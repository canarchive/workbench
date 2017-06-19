<?php

namespace baseapp\behaviors;

use yii\base\Behavior;
use yii\helpers\ArrayHelper;
use baseapp\merchant\models\Merchant;
use merchant\models\User;

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

    public function getMerchantInfos($privInfo = null)
    {
        $where = isset($privInfo['merchant_id']) ? ['id' => $privInfo['merchant_id']] : null;
        
        $infos = ArrayHelper::map(Merchant::find()->select('id, name')->where($where)->all(), 'id', 'name');
        return $infos;
    }

    public function getMerchantAllInfos()
    {
        $infos = Merchant::find()->indexBy('id')->all();
        return $infos;
    }

    public function getUserInfo($where)
    {
        $userModel = new User();
        $userInfo = $userModel->getInfo($where);
        return $userInfo;
    }
}
