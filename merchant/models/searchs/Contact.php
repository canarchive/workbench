<?php

namespace merchant\models\searchs;

use yii\data\ActiveDataProvider;
use merchant\models\Contact as ContactModel;

class Contact extends ContactModel
{
    public function search($params)
    {
        $query = self::find();
        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }
}
