<?php

namespace baseapp\common\models\searchs;

use yii\data\ActiveDataProvider;

trait TagTrait
{
    public function search($params)
    {
        $model = new self();
        $query = $model->find();

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }
}
