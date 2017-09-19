<?php

namespace baseapp\ifeed\models;

use common\models\BaseModel;

class IfeedModel extends BaseModel
{
    public static function getDb()
    {
        return \Yii::$app->dbShoot;
    }	

	public function getAttachmentModel()
	{
		return new \ifeed\models\Attachment();
	}
}
