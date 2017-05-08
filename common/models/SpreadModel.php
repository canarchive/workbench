<?php

namespace common\models;

use Yii;
use yii\helpers\ArrayHelper;
use spread\models\Attachment as AttachmentSpread;
use merchant\models\Merchant;
use merchant\models\Service;

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
