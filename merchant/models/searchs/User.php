<?php

namespace merchant\models\searchs;

use yii\data\ActiveDataProvider;
use merchant\models\User as UserModel;

class User extends UserModel
{
    public function search($params)
    {
        $query = self::find();
        $dataProvider = new ActiveDataProvider(['query' => $query]);
        if (!$this->load($params, '') || !$this->validate()) {
            return $dataProvider;
        }

        foreach ((array) $this->merchant_id as $mId) {
			if (empty($mId)) {
				continue;
			}
            $mIdStr = ',' . $mId . ',';
            $query->orFilterWhere(['like', 'merchant_id', $mIdStr]);
        }

        $query->andFilterWhere(['like', 'name', $this->name]);

        $query->andFilterWhere([
            'status' => $this->status,
            'role' => $this->role,
        ]);

        return $dataProvider;
    }

    public function _searchDatas()
    {
        $list = [
            $this->_sPointParam(['field' => 'merchant_id', 'table' => 'merchant']),
            $this->_sPointParam(['field' => 'role', 'table' => 'merchant-role', 'indexName' => 'code']),
            $this->_sKeyParam(['field' => 'status']),
        ];
        $form = [
        [
            $this->_sTextParam(['field' => 'name']),
            $this->_sStartParam(),
        ]
        ];
        return ['list' => $list, 'form' => $form];
    }
}
