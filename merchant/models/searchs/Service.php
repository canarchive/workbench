<?php

namespace merchant\models\searchs;

use yii\data\ActiveDataProvider;
use baseapp\merchant\models\Service as ServiceModel;

class Service extends ServiceModel
{
    public function rules()
    {
        return [
            [['name', 'status', 'merchant_id'], 'safe'],
        ];
    }

    public function search($params)
    {
        $model = new self();
        $query = $model->find();

		$dataProvider = new ActiveDataProvider([
			'query' => $query,
            'pagination' => [
			    'pageSize' => 100,
		    ],
		]);

        if (!$this->load($params, '') || !$this->validate()) {
            return $dataProvider;
        }
		$query->andFilterWhere([
			'status' => $this->status,
			'merchant_id' => $this->merchant_id,
		]);
        $query->andFilterWhere(['like', 'name', $this->name]);

        return $dataProvider;
    }

    public function _searchDatas()
    {
        $list = [
            $this->_sPointParam(['field' => 'merchant_id', 'table' => 'merchant']),
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
