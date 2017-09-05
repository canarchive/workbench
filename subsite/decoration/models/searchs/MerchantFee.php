<?php

namespace subsite\decoration\models\searchs;

use yii\data\ActiveDataProvider;
use subsite\decoration\models\MerchantFee AS MerchantFeeModel;

class MerchantFee extends MerchantFeeModel
{
    public function rules()
    {
        return [
            [['merchant_id', 'status'], 'safe'],
        ];
    }

    public function _searchElems()
    {
        return [
            ['field' => 'merchant_id', 'type' => 'common'],
            ['field' => 'status', 'type' => 'common'],
        ];
    }

    public function _searchDatas()
    {
        $list = [
            $this->_sPointParam(['name' => 'CPA商家', 'table' => 'merchant', 'field' => 'merchant_id', 'where' => ['status' => 'cpa']]),
            $this->_sPointParam(['name' => 'CPS商家', 'table' => 'merchant', 'field' => 'merchant_id', 'where' => ['status' => 'cps']]),
            $this->_sPointParam(['name' => '其他商家', 'table' => 'merchant', 'field' => 'merchant_id', 'where' => ['status' => 'pause']]),
            $this->_sKeyParam(['field' => 'status']),
        ];
        return ['list' => $list];
    }
}
