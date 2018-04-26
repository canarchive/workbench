<?php

namespace baseapp\spread\models;

use Yii;
use common\models\BaseModel;
use spread\models\Attachment as AttachmentSpread;

class SpreadModel extends BaseModel
{
    public static function getDb()
    {
        return Yii::$app->dbSpread;
    }    

	protected function getAttachmentModel()
	{
		return new AttachmentSpread();
	}
}