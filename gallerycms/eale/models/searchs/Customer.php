<?php

namespace gallerycms\eale\models\searchs;

use yii\data\ActiveDataProvider;
use gallerycms\eale\models\Customer as CustomerModel;

class Customer extends CustomerModel
{
    public function search($params)
    {
        $query = self::find();

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }
}
