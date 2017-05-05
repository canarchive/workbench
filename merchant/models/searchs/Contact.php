<?php

namespace merchant\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use merchant\models\Contact as ContactModel;

class Contact extends ContactModel
{
    public function search($params)
    {
        $query = ContactModel::find();
        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }
}
