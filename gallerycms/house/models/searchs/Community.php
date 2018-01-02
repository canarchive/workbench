<?php

namespace gallerycms\house\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use gallerycms\house\models\Community as CommunityModel;

class Community extends CommunityModel
{
    public function search($params)
    {
        $query = CommunityModel::find();

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }
}
