<?php

namespace spread\models\searchs;

use yii\data\ActiveDataProvider;

Trait DispatchTrait
{
    public $created_at_start;
    public $created_at_end;

    public function rules()
    {
        return [
            [['mobile', 'created_at_start', 'created_at_end',], 'safe'],
        ];
    }

    public function search($params)
    {
        $query = self::find();

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        if ($this->load($params) && !$this->validate()) {
            return $dataProvider;
        }

        $query->andFilterWhere(['like', 'mobile', $this->mobile]);
        $query->andFilterWhere([
            'service_id' => $this->service_id,
            //'status' => $this->status,
        ]);

        return $dataProvider;
    }
}
