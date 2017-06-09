<?php

namespace common\models;

use Yii;
use yii\helpers\ArrayHelper;
use spread\models\Attachment as AttachmentSpread;

class SpreadModel extends MerchantSpreadModel
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
