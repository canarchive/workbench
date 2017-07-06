<?php

namespace baseapp\spread\models\searchs;

use yii\data\ActiveDataProvider;

Trait GuestbookTrait
{
    public $created_at_start;
    public $created_at_end;
    public function rules()
    {
        return [
            [['mobile', 'merchant_id', 'created_at_start', 'created_at_end'], 'safe'],
        ];
    }

    public function search($params)
    {
        $query = self::find();

        $dataProvider = new ActiveDataProvider(['query' => $query]);
        if (!$this->load($params, '') || !$this->validate()) {
            return $dataProvider;
        }
		$query->andFilterWhere([
			'merchant_id' => $this->merchant_id,
            'mobile' => $this->mobile,
		]);

        $startTime = intval(strtotime($this->created_at_start));
        $endTime = $this->created_at_end > 0 ? intval(strtotime($this->created_at_end)) : time();
        $query->andFilterWhere(['>=', 'created_at', $startTime]);
        $query->andFilterWhere(['<', 'created_at', $endTime]);

        return $dataProvider;
    }
}
