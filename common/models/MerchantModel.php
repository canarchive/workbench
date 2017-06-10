<?php

namespace common\models;

use Yii;
use merchant\models\Attachment As AttachmentMerchant;

class MerchantModel extends BaseModel
{
    public static function getDb()
    {
        return Yii::$app->dbMerchant;
    }    

    public function getBehaviorCodes()
    {
        return ['merchant', 'service'];
    }

    protected function getAttachmentModel()
    {
        return new AttachmentMerchant();
    }

    public function _getClassPrefix()
    {
        return '\merchant\models\\';
    }
}
