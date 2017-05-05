<?php

namespace spread\decoration\models\searchs;

use yii\data\ActiveDataProvider;
use spread\decoration\models\House AS HouseModel;

class House extends HouseModel
{
    public function search($params)
    {
        $query = self::find();

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }
}
