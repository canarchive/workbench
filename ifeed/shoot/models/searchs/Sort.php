<?php

namespace ifeed\shoot\models\searchs;

use yii\data\ActiveDataProvider;
use ifeed\shoot\models\Sort as SortModel;

class Sort extends SortModel
{
    public function search($params)
    {
        $query = self::find();

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }
}
