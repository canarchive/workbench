<?php

namespace baseapp\paytrade\models;

use common\models\BaseModel;

class PaytradeModel extends BaseModel
{
    public static function getDb()
    {
        return \Yii::$app->dbPaytrade;
    }    

    public function getAttachmentModel()
    {
        return new \paytrade\models\Attachment();
    }

	public function getGoodsModel($returnNew = false)
	{
		static $gModel;

		if (is_null($gModel) || $returnNew) {
			$gModel = $this->_newModel('goods', $returnNew);
		}
		return $gModel;
	}
}
