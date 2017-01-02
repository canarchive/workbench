<?php

namespace gallerycms\sinfo\models\searchs;

use yii\data\ActiveDataProvider;
use gallerycms\sinfo\models\Sort as SortModel;

class Sort extends SortModel
{
    public function search($params)
    {
        $query = self::find();

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }
}
