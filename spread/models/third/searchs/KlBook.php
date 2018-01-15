<?php

namespace spread\models\third\searchs;

use yii\data\ActiveDataProvider;
use spread\models\third\KlBook as KlBookModel;

class KlBook extends KlBookModel
{
    public function search($params)
    {
        $query = self::find()->orderBy('id DESC');

        $dataProvider = new ActiveDataProvider(['query' => $query, 'pagination' => ['pageSize' => 100]]);

        return $dataProvider;
    }
}
