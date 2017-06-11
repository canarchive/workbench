<?php

namespace baseapp\merchant\models\searchs;

use yii\data\ActiveDataProvider;

Trait CallbackTrait
{
    public function search($params)
    {
        $query = self::find();

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }
}
