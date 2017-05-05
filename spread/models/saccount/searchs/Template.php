<?php

namespace spread\models\saccount\searchs;

use yii\data\ActiveDataProvider;
use spread\models\saccount\Template as TemplateModel;

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
