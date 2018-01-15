<?php

namespace gallerycms\eale\models\searchs;

use yii\data\ActiveDataProvider;
use gallerycms\eale\models\Info as InfoModel;

class Info extends InfoModel
{
    public function rules()
    {
        return [
            [['name', 'sort'], 'safe'],
        ];
    }

    public function search($params)
    {
        $query = self::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'sort' => [
                'sortParam' => 'psort',
                'defaultOrder' => [
                    'created_at' => SORT_DESC,
                ],
            ],
        ]);

        if ($this->load($params, '') && !$this->validate()) {
            return $dataProvider;
        }
		if (!empty($this->name)) {
            $query->andFilterWhere(['like', 'name', $this->name]);
		}

		$query->andFilterWhere([
			'sort' => $this->sort,
		]);

        return $dataProvider;
    }
}
