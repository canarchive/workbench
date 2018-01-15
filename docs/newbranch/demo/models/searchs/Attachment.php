<?php

namespace demo\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use demo\models\Attachment as AttachmentModel;

class Attachment extends AttachmentModel
{
    public function search($params)
    {
        $query = AttachmentModel::find();

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }
}
