<?php

namespace merchant\models\searchs;

use yii\data\ActiveDataProvider;
use baseapp\merchant\models\Service as ServiceModel;

class Service extends ServiceModel
{
    public function rules()
    {
        return [
            [['status', 'merchant_id'], 'safe'],
        ];
    }

    public function search($params)
    {
        $model = new self();
        $query = $model->find();

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        if (!$this->load($params, '') || !$this->validate()) {
            return $dataProvider;
        }
		$query->andFilterWhere([
			'status' => $this->status,
			'merchant_id' => $this->merchant_id,
		]);

        return $dataProvider;
    }
}
