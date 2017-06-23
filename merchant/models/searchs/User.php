<?php

namespace merchant\models\searchs;

use yii\data\ActiveDataProvider;
use merchant\models\User as UserModel;

class User extends UserModel
{
    public function rules()
    {
        return [
            [['merchant_id', 'role', 'status'], 'safe'],
        ];
    }

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

        $query->andFilterWhere([
            'status' => $this->status,
            'role' => $this->role,
        ]);

        return $dataProvider;
    }
}
