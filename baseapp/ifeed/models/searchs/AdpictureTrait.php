<?php

namespace baseapp\ifeed\models\searchs;

use yii\data\ActiveDataProvider;

trait AdpictureTrait
{
    public function rules()
    {
        return [
            [['site_code', 'page', 'position'], 'safe'],
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
			'site_code' => $this->site_code,
			'page' => $this->page,
			'position' => $this->position,
		]);

        return $dataProvider;
    }
}
