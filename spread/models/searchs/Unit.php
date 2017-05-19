<?php

namespace spread\models\searchs;

use yii\data\ActiveDataProvider;
use spread\models\Unit as UnitModel;

class Unit extends UnitModel
{
    public function search($params)
    {
        $query = self::find()->orderBy('id DESC');

        $dataProvider = new ActiveDataProvider(['query' => $query, 'pagination' => ['pageSize' => 100]]);

        return $dataProvider;
    }
}
