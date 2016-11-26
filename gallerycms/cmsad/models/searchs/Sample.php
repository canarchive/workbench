<?php

namespace gallerycms\cmsad\models\searchs;

use yii\data\ActiveDataProvider;
use gallerycms\cmsad\models\Sample as SampleModel;

class Sample extends SampleModel
{
    public function search($params)
    {
        $query = self::find();

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }
}
