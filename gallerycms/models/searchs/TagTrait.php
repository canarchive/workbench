<?php

namespace gallerycms\models\searchs;

use yii\data\ActiveDataProvider;

Trait TagTrait
{
    public function search($params)
    {
        $model = new self();
        $query = $model->find();

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }
}
