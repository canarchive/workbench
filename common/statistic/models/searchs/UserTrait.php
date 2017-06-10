<?php

namespace common\statistic\models\searchs;

use yii\data\ActiveDataProvider;

Trait UserTrait
{
    public $created_at_start;
    public $created_at_end;

    public function rules()
    {
        return [
            [['merchant_id', 'mobile', 'city_code', 'status', 'invalid_status', 'created_at_start', 'created_at_end',], 'safe'],
        ];
    }

    public function search($params)
    {
        $query = self::find()->orderBy('id DESC');

        $dataProvider = new ActiveDataProvider(['query' => $query, 'pagination' => ['pageSize' => 100]]);

        if ($this->load($params, '') && !$this->validate()) {
            return $dataProvider;
        }

        $query->andFilterWhere(['like', 'mobile', $this->mobile]);
        if (isset($_GET['service_id'])) {
            $serviceIds = (array) $_GET['service_id'];
            foreach ($serviceIds as & $serviceId) {
                $serviceId = intval($serviceId);
            }
            $query->andFilterWhere(['service_id' => $serviceIds]);
        }

        $query->andFilterWhere([
            //'service_id' => $this->service_id,
            'merchant_id' => $this->merchant_id,
            'city_code' => $this->city_code,
            //'city_input' => $this->city_input,
            //'status' => $this->status,
            'invalid_status' => $this->invalid_status,
        ]);
		if ($this->status !== null) {
			$query->andWhere(['status' => $this->status]);
		}
        $startTime = intval(strtotime($this->created_at_start));
        $endTime = $this->created_at_end > 0 ? intval(strtotime($this->created_at_end)) : time();
        $query->andFilterWhere(['>=', 'signup_at', $startTime]);
        $query->andFilterWhere(['<', 'signup_at', $endTime]);

        return $dataProvider;
    }
}
