<?php

namespace gallerycms\merchant\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use gallerycms\merchant\models\Realcase as RealcaseModel;

class Realcase extends RealcaseModel
{
    public function rules()
    {
        return [
            [['city_code', 'merchant_id'], 'safe'],
        ];
    }

    public function search($params)
    {
        $query = RealcaseModel::find();

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        if ($this->load($params, '') && !$this->validate()) {
            return $dataProvider;
        }

		$query->andFilterWhere([
			'city_code' => $this->city_code,
			'status' => $this->status,
			'merchant_id' => $this->merchant_id,
		]);

        return $dataProvider;
    }
}
