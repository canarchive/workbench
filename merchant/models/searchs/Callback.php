<?php

namespace merchant\models\searchs;

use yii\data\ActiveDataProvider;
use merchant\models\Callback as CallbackModel;

class Callback extends CallbackModel
{
    public function search($params)
    {
        $query = self::find();

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }
}
