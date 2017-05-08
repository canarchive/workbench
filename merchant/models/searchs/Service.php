<?php

namespace merchant\models\searchs;

use yii\data\ActiveDataProvider;
use merchant\models\Service;

class Service extends Service
{
    public function search($params)
    {
        $model = new self();
        $query = $model->find();

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }
}
