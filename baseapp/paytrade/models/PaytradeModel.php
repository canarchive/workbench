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

	public function getPassportModel($code, $module = null, $returnNew = false)
	{
		static $models;

		$key = $code . $module;
		if (!isset($model[$key]) || $returnNew) {
			$class = ucfirst($code);
			$class = is_null($module) ? "\passport\models\\{$class}" : "\passport\\{$module}\models\\{$class}";
			$models[$key] = new $class();
		}
		return $models[$key];
	}

	/*public function getShopModel($code, $module, $returnNew = false)
	{
		static $models;

		$key = $code . $module;
		if (!isset($model[$key]) || $returnNew) {
			$class = ucfirst($code);
			$class = "\shop\\{$module}\models\\{$class}";
			$models[$key] = new $class();
		}
		return $models[$key];
	}*/

	public function getStatusPayInfos()
	{
		return [
			0 => '未支付',
			1 => '已支付',
		];
	}

	/*public function getPointModel($code)
	{
		static $models;
		$class = ucfirst($code);
		$class = "\paytrade\models\\{$class}";
		$models[$code] = !isset($models[$code]) ? new $class() : $models[$code];
		return $models[$code];
	}*/
}
