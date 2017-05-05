<?php

namespace common\models;

use Yii;
use yii\helpers\ArrayHelper;
use \merchant\models\Attachment As AttachmentMerchant;
use merchant\models\Merchant;

class MerchantModel extends BaseModel
{
    public static function getDb()
    {
        return Yii::$app->dbMerchant;
    }    

    protected function getAttachmentModel()
    {
        return new AttachmentMerchant();
    }

    protected function getMerchantInfo()
    {
        if (empty($this->merchant_id)) {
            return [];
        }

        $model = new Merchant();
        $info = $model->findOne($this->merchant_id);
        return $info;
    }

    protected function getMerchantInfos()
    {
        $infos = ArrayHelper::map(Merchant::find()->select('id, name')->all(), 'id', 'name');
        return $infos;
    }

    public function getMerchantAllInfos()
    {
        $infos = Merchant::find()->indexBy('id')->all();
        return $infos;
    }

    public function _getClassPrefix()
    {
        return '\merchant\models\\';
    }
}
