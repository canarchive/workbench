<?php

namespace gallerycms\eale\models\searchs;

use yii\data\ActiveDataProvider;
use gallerycms\eale\models\Sample as SampleModel;

class Sample extends SampleModel
{
    public function rules()
    {
        return [
            [['name', 'sort', 'recommend'], 'safe'],
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
        if ($this->sort == 'work') {
            $this->sort = null;
            $this->recommend = 'iealecn';
        }

		$query->andFilterWhere([
			'sort' => $this->sort,
            'recommend' => $this->recommend,
		]);

        return $dataProvider;
    }
}
