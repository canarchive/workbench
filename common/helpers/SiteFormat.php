<?php

namespace common\helpers;

use Yii;

class SiteFormat
{
	/**
	 * @param $sort string 路由的类别，如shop(电商)、passport(用户中心)等
	 * @param $datas array 路由列表
	 */
    public static function formatRule($sort, $datas)
    {
		static $infos = [];
		if (isset($infos[$sort])) {
			return $infos[$sort];
		}

		foreach ($datas as $code => & $data) {
			if (!isset($data['domains']) || !is_array($data['domains'])) {
				$data['domains'] = ['' => Yii::getAlias("@pc.{$code}.{$sort}url")];
				continue;
			}
			foreach ($data['domains'] as $clientType) {
			    $data[$clientType] = Yii::getAlias("@{$clientType}.{$code}.{$sort}url");
			};
		}
		$infos[$sort] = $datas;
        return $datas;
	}
}
