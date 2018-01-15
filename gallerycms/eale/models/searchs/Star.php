<?php

namespace gallerycms\eale\models\searchs;

use yii\data\ActiveDataProvider;
use gallerycms\eale\models\Star as StarModel;

class Star extends StarModel
{
    public function search($params)
    {
        $query = self::find();

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }
}
