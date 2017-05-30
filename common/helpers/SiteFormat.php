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
			$domains = isset($data['domains']) ? (array) $data['domains'] : ['' => null];
			unset($data['domains']);
			foreach ($domains as $key => $clientType) {
				$aliasPre = in_array($clientType, ['', 'pc']) ? '' : $clientType . '.';
			    $data['domains'][$clientType] = Yii::getAlias("@{$aliasPre}{$code}.{$sort}url");
			};
		}
		$infos[$sort] = $datas;
        return $datas;
	}
}
