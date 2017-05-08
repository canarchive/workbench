<?php

namespace common\models;

use Yii;
use yii\helpers\ArrayHelper;
use spread\models\Attachment as AttachmentSubsite;
use merchant\models\Merchant;

class SubsiteModel extends MerchantSpreadModel
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
