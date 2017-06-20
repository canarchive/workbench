<?php

namespace common\models;

use Yii;
use subsite\models\Attachment as AttachmentSubsite;

class SubsiteModel extends BaseModel
{
    public static function getDb()
    {
        return Yii::$app->dbSubsite;
    }    

	protected function getAttachmentModel()
	{
		return new AttachmentSubsite();
	}
}
