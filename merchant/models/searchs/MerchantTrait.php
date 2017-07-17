<?php

namespace merchant\models\searchs;

use yii\data\ActiveDataProvider;

trait MerchantTrait
{
    public $created_at_start;
    public $created_at_end;
    public $updated_at_start;
    public $updated_at_end;
    public $merchant_id;

    public function rules()
    {
        return [
            [['name', 'merchant_id', 'city_code', 'status', 'created_at_start', 'created_at_end', 'updated_at_start', 'updated_at_end'], 'safe'],
        ];
    }

    public function search($params)
    {
        $query = self::find();//->orderBy('id DESC');

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            //'sort' => ['attributes' => ['num_owner', 'status']],
        ]);

        if (!$this->load($params, '') || !$this->validate()) {
            return $dataProvider;
        }
        $this->load($params);
        if (!empty($this->name)) {
            $query->andFilterWhere(['like', 'name', $this->name]);
        }

        $query->andFilterWhere([
            'city_code' => $this->city_code,
            'id' => $this->merchant_id,
            'status' => $this->status,
        ]);

        $this->searchTimeElem($query);
        $this->searchTimeElem($query, 'updated_at');

        return $dataProvider;
    }
}
