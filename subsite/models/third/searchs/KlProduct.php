<?php

namespace spread\models\kl\searchs;

use yii\data\ActiveDataProvider;
use spread\models\kl\KlProduct as KlProductModel;

class KlProduct extends KlProductModel
{
    public function search($params)
    {
        $query = self::find()->orderBy('id DESC');

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }
}
