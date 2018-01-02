<?php

namespace gallerycms\merchant\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use gallerycms\merchant\models\Merchant as MerchantModel;

class Merchant extends MerchantModel
{
	public $created_at_start;
	public $created_at_end;
	public $updated_at_start;
	public $updated_at_end;

    public function rules()
    {
        return [
            [['name', 'city_code', 'status', 'created_at_start', 'created_at_end', 'updated_at_start', 'updated_at_end'], 'safe'],
        ];
    }

    public function search($params)
    {
        $query = self::find();//->orderBy('orderlist DESC');

		$dataProvider = new ActiveDataProvider([
			'query' => $query,
			'sort' => [
            'defaultOrder' => [
                'id' => SORT_DESC,
            ]
            ],
		]);

        if ($this->load($params, '') && !$this->validate()) {
            return $dataProvider;
        }
		$this->load($params);
		if (!empty($this->name)) {
            $query->andFilterWhere(['like', 'name', $this->name]);
		}

		$query->andFilterWhere([
			'city_code' => $this->city_code,
			'status' => $this->status,
		]);

		$this->searchTimeElem($query);
		$this->searchTimeElem($query, 'updated_at');

        return $dataProvider;
    }
}
