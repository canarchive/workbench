<?php

namespace common\models;

class DemoModel extends BaseModel
{
    public static function getDb()
    {
        return \Yii::$app->dbDemo;
    }    

    public function getAttachmentModel()
    {
        return new \demo\models\Attachment();
    }
}
