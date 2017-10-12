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

	public function getGoodsModel($code, $returnNew = false)
	{
		static $model;

		if (is_null($model) || $returnNew) {
			$class = "\shop\\{$code}\models\Goods";
			$model = new $class();
		}
		return $model;
	}

	public function getGoodsSkuModel($code, $returnNew = false)
	{
		static $model;

		if (is_null($model) || $returnNew) {
			$class = "\shop\\{$code}\models\GoodsSku";
			$model = new $class();
		}
		return $model;
	}
}
