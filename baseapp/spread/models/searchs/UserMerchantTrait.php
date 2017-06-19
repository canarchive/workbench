<?php

namespace baseapp\spread\models\searchs;

use yii\data\ActiveDataProvider;

Trait UserMerchantTrait
{
    public $created_at_start;
    public $created_at_end;

    public function rules()
    {
        return [
            [['created_at_start', 'created_at_end', 'status', 'mobile', 'merchant_id'], 'safe'],
        ];
    }

    public function search($params)
    {
        $query = self::find()->orderBy('id DESC');

        $dataProvider = new ActiveDataProvider(['query' => $query]);
        if ($this->load($params, '') && !$this->validate()) {
            return $dataProvider;
        }
        if (!empty($this->mobile)) {
            $query->andFilterWhere(['like', 'mobile', $this->mobile]);
        }

        $query->andFilterWhere([
            'status' => $this->status,
            'merchant_id' => $this->merchant_id,
        ]);
        //$this->merchant_id = 0;

        $startTime = intval(strtotime($this->created_at_start));
        $endTime = $this->created_at_end > 0 ? intval(strtotime($this->created_at_end)) : time();
        $query->andFilterWhere(['>=', 'created_at', $startTime]);
        $query->andFilterWhere(['<', 'created_at', $endTime]);
        return $dataProvider;
    }
}
