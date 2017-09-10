<?php

namespace ifeed\shoot\models\searchs;

use yii\data\ActiveDataProvider;
use ifeed\shoot\models\Info as InfoModel;

class Info extends InfoModel
{
    public function search($params)
    {
        $query = self::find();

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }
}
