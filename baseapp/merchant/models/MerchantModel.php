<?php

namespace baseapp\merchant\models;

use Yii;
use common\models\BaseModel;
use merchant\models\Attachment As AttachmentMerchant;

class MerchantModel extends BaseModel
{
    use TraitParam;

    public static function getDb()
    {
        return Yii::$app->dbMerchant;
    }    

    /*public function getBehaviorCodes()
    {}*/

    protected function getAttachmentModel()
    {
        return new AttachmentMerchant();
    }

    public function _getClassPrefix()
    {
        return '\merchant\models\\';
    }

    public function uploadUrl($table, $field, $id)
    {
        return Yii::getAlias('@merchanturl') . "/upload/{$table}/{$field}.html?mparam=merchant&id={$id}";
    }

    public function salemanPriv()
    {
        $saleman = isset(Yii::$app->params['salemanInfo']) ? Yii::$app->params['salemanInfo'] : false;
        if (!empty($saleman) && $this->managerRole == 'service-saleman' && $saleman['id'] != $this->saleman_id) {
            return false;
        }
        return true;
    }
}
