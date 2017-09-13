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

	public function getSiteInfos()
	{
        $file = Yii::getAlias('@ifeed') . "/config/params-sitelist.php";
        $infos = require($file);
		return $infos;
	}

    public function getSiteCodeInfos()
    {
		$infos = $this->siteInfos;
		$datas = [];
		foreach ($infos as $code => $info) {
			$datas[$code] = $info['name'];
		}
		return $datas;
    }
}
