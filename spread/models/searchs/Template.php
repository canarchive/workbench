<?php

namespace spread\models\searchs;

use yii\data\ActiveDataProvider;
use spread\models\Template as TemplateModel;

class Template extends TemplateModel
{
    public function search($params)
    {
        $model = new self();
        $query = $model->find();

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }
}
