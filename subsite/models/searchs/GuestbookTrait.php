<?php

namespace subsite\models\searchs;

use yii\data\ActiveDataProvider;

Trait GuestbookTrait
{
    public function search($params)
    {
        $query = self::find();

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }
}
