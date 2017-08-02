<?php

namespace subsite\decoration\models\searchs;

use yii\data\ActiveDataProvider;
use subsite\decoration\models\ServiceWage as ServiceWageModel;

class ServiceWage extends ServiceWageModel
{

    public function rules()
    {
        return [
            [['service_id', 'created_month'], 'safe'],
        ];
    }

    public function search($params)
    {
        $query = self::find()->orderBy('created_month DESC');

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        if ($this->load($params, '') && !$this->validate()) {
            return $dataProvider;
        }

     	$query->orderBy(['created_month' => SORT_DESC]);

		$serviceIds = empty($this->service_id) ? null : $this->service_id;
        $query->andFilterWhere([
            'service_id' => $serviceIds,
        ]);

        return $dataProvider;        
    }    
}
