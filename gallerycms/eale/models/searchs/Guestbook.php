<?php

namespace gallerycms\eale\models\searchs;

use yii\data\ActiveDataProvider;
use gallerycms\eale\models\Guestbook as GuestbookModel;

class Guestbook extends GuestbookModel
{
    public function search($params)
    {
        $query = self::find()->orderBy(['created_at' => SORT_DESC]);

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }
}
