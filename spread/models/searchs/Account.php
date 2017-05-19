<?php

namespace spread\models\searchs;

use yii\data\ActiveDataProvider;
use spread\models\Account as AccountModel;

class Account extends AccountModel
{
    public function search($params)
    {
        $query = self::find()->orderBy('id DESC');

        $dataProvider = new ActiveDataProvider(['query' => $query, 'pagination' => ['pageSize' => 100]]);

        return $dataProvider;
    }
}
