<?php

namespace gallerycms\house\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use gallerycms\house\models\Sample as SampleModel;

class Sample extends SampleModel
{
    public function search($params)
    {
        $query = SampleModel::find();

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }
}
