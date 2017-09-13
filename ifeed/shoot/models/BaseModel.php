<?php

namespace ifeed\shoot\models;

use Yii;
use ifeed\models\BaseModel as BaseModelBase;

class BaseModel extends BaseModelBase
{
    public function _getClassPrefix()
    {
        return '\ifeed\shoot\models\\';
    }

    public function uploadUrl($table, $field, $id)
    {   
        return Yii::getAlias('@shoot.ifeedurl') . "/upload/{$table}/{$field}.html?mparam=shoot&id={$id}";
    } 

    public function getSiteCodeInfos()
    {
        $file = Yii::getAlias('@ifeed') . "/config/params-sitelist.php";
        $infos = require($file);
		$datas = [];
		foreach ($infos as $code => $info) {
			$datas[$code] = $info['name'];
		}
		return $datas;
    }
}
