<?php

namespace subsite\decoration\models\searchs;

use yii\data\ActiveDataProvider;
use subsite\decoration\models\MerchantFee AS MerchantFeeModel;

class MerchantFee extends MerchantFeeModel
{
    public function rules()
    {
        return [
            [['merchant_id'], 'safe'],
        ];
    }

    public function search($params)
    {
        return [
            ['field' => 'merchant_id', 'type' => 'common'],
        ];
    }

    public function _searchDatas()
    {
        $list = [
            $this->_sPointParam(['name' => 'CPA商家', 'table' => 'merchant', 'field' => 'merchant_id', 'where' => ['status' => 2]]),
            $this->_sPointParam(['name' => 'CPS商家', 'table' => 'merchant', 'field' => 'merchant_id', 'where' => ['status' => 3]]),
            $this->_sPointParam(['name' => '其他商家', 'table' => 'merchant', 'field' => 'merchant_id', 'where' => ['status' => 99]]),
        ];
        return ['list' => $list];
    }
}
