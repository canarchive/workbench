<?php

namespace gallerycms\eale\models\searchs;

use yii\data\ActiveDataProvider;
use gallerycms\eale\models\Service as ServiceModel;

class Service extends ServiceModel
{
    public function search($params)
    {
        $query = self::find();

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }
}
