<?php

namespace gallerycms\eale\models;

use Yii;

trait EaleTrait
{
    public static function getDb()
    {
        return Yii::$app->dbEale;
    }    

	protected function getPageInfos($siteCode = null)
	{
        $datas = require Yii::getAlias('@gallerycms') . '/config/eale/url-eale.php';
        return $datas;
	}

	protected function getSiteCodeInfos()
	{
		$datas = [
			'eale' => '摄影机构',
			'ieale' => '美学馆',
            'iealecn' => '培训机构',
		];
		return $datas;
	}

    public function _getClassPrefix()
    {
        return '\gallerycms\eale\models\\';
    }

	public function getInfoBySource($id)
	{
		$info = static::find()->where(['source_id' => $id])->one();//->toArray();
		return $info;
	}
}
