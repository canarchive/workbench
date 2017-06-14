<?php

namespace baseapp\merchant\models;

use Yii;
use common\models\BaseModel;
use merchant\models\User;
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

    public function getUserInfo($where)
    {
        $userModel = new User();
        $userInfo = $userModel->getInfo($where);
        return $userInfo;
    }
}
