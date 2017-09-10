<?php

namespace ifeed\shoot\models\searchs;

use yii\data\ActiveDataProvider;
use ifeed\shoot\models\Sample as SampleModel;

class Sample extends SampleModel
{
    public function search($params)
    {
        $query = self::find()->orderBy('id DESC');

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }
}
