<?php

namespace spread\models\searchs;

use yii\data\ActiveDataProvider;
use spread\models\Keyword as KeywordModel;

class Keyword extends KeywordModel
{
    public function search($params)
    {
        $query = self::find()->orderBy('id DESC');

        $dataProvider = new ActiveDataProvider(['query' => $query, 'pagination' => ['pageSize' => 100]]);

        return $dataProvider;
    }
}
