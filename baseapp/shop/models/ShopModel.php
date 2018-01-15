<?php

namespace baseapp\shop\models;

use yii\helpers\ArrayHelper;
use common\models\BaseModel;

class ShopModel extends BaseModel
{
    public static function getDb()
    {
        return \Yii::$app->dbShop;
    }    

    public function getAttachmentModel()
    {
        return new \shop\models\Attachment();
    }

	public function _getClassPrefix()
	{
		return "\shop\models\\";
	}
}
