<?php

namespace baseapp\common\models\searchs;

use yii\data\ActiveDataProvider;

trait SortTrait
{
    public function search($params)
    {
        $query = self::find();

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }
}
