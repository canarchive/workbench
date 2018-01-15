<?php

namespace baseapp\passport\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use baseapp\passport\models\Company as CompanyModel;

class Company extends CompanyModel
{
    public function search($params)
    {
        $query = CompanyModel::find();

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }
}
