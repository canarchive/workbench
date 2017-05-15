<?php

namespace demo\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use demo\models\Demo as DemoModel;

class Demo extends DemoModel
{
    public function search($params)
    {
        $query = self::find();
        $dataProvider = new ActiveDataProvider(['query' => $query]);
        return $dataProvider;
    }
}
