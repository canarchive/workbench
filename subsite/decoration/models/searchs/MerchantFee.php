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
        $query = self::find()->orderBy('day_start DESC');

        $dataProvider = new ActiveDataProvider(['query' => $query]);
        if ($this->load($params, '') && !$this->validate()) {
            return $dataProvider;
        }
        $query->andFilterWhere([
            'merchant_id' => $this->merchant_id,
        ]);

        return $dataProvider;
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
