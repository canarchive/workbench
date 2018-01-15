<?php

namespace spread\models\saccount\searchs;

use yii\data\ActiveDataProvider;
use spread\models\saccount\Domain as DomainModel;

class Domain extends DomainModel
{
    public function search($params)
    {
        $model = new self();
        $query = $model->find();

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }
}
