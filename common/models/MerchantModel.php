<?php

namespace common\models;

use Yii;
use yii\helpers\ArrayHelper;
use \merchant\models\Attachment As AttachmentMerchant;
use merchant\models\Merchant;

class MerchantModel extends MerchantSpreadModel
{
    public static function getDb()
    {
        return Yii::$app->dbMerchant;
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
