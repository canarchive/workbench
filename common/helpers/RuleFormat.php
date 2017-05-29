<?php

namespace common\helpers;

use Yii;

class RuleFormat
{
	/**
	 * @param $datas array 路由列表
	 * @param $siteCodes array 站点列表
	 * @onlySite string 只生成指定站点的路由
	 */
    public static function formatRule($datas, $siteInfos, $onlySite = null)
    {
        $ruleDatas = [];
        foreach ($datas as $data) {

            $siteCodes = $onlySite ? [$onlySite] : (!empty($data['only']) ? $data['only'] : array_keys($siteBaseCodes));
            $ruleDataOrigin = $data['data'];
        
            foreach ($siteCodes as $siteCode) {
				$domains = (array) $siteInfos[$siteCode]['domains'];
				foreach ($domains as $domain) {
			        $ruleData['route'] = str_replace('{{SORT}}', $siteCode, $ruleDataOrigin['route']);
                    $ruleData['pattern'] = $domain . $ruleDataOrigin['pattern'];
                    $ruleDatas[] = $ruleData;
                }   
            }
        }
        
        //print_r($ruleDatas);exit();
        return $ruleDatas; 
    }
}
