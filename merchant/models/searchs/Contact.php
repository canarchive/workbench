<?php

namespace merchant\models\searchs;

use yii\data\ActiveDataProvider;
use merchant\models\Contact as ContactModel;

class Contact extends ContactModel
{
    public function rules()
    {
        return [
            [['merchant_id'], 'safe'],
        ];
    }

    public function search($params)
    {
        $query = self::find();
        $dataProvider = new ActiveDataProvider(['query' => $query]);

        if ($this->load($params, '') && !$this->validate()) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'merchant_id' => $this->merchant_id
        ]);

        return $dataProvider;
    }
}
