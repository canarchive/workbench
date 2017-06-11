<?php

namespace common\models;

use Yii;
use spread\models\Attachment as AttachmentSpread;

class SpreadModel extends BaseModel
{
    public static function getDb()
    {
        return Yii::$app->dbSpread;
    }    

    public function getBehaviorCodes()
    {
        return ['merchant', 'service'];
    }

	protected function getAttachmentModel()
	{
		return new AttachmentSpread();
	}
}
