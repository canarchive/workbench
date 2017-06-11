<?php

namespace baseapp\passport\models;

use Yii;
use common\models\BaseModel;
use common\models\AttachmentCommon;

class PassportModel extends BaseModel
{
    public static function getDb()
    {
        return Yii::$app->db;
    }

    protected function getAttachmentModel()
    {
        return new AttachmentCommon();
    }
}
