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

    public function getSearchDatas()
    {
        $list = [
            $this->_sMerchantParam(['status' => 2]),
            $this->_sMerchantParam(['status' => 3]),
            $this->_sMerchantParam(['status' => 99]),
        ];
        $form = [[
        ]];
        $datas = ['list' => $list, 'form' => $form];
        return $datas;
    }
}
