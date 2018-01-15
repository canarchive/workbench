<?php

namespace demo\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use demo\models\Photographer as PhotographerModel;

class Photographer extends PhotographerModel
{
    public function search($params)
    {
        $query = PhotographerModel::find();
        $dataProvider = new ActiveDataProvider(['query' => $query]);
        return $dataProvider;
    }
}
