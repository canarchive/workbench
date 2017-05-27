<?php

namespace common\helpers;

use Yii;

class RuleFormat
{
	/**
	 * @param $sort string 路由的类别，如shop(电商)、passport(用户中心)等
	 * @param $datas array 路由列表
	 * @param $siteCodes array 站点列表
	 * @onlySite string 只生成指定站点的路由
	 */
    public static function formatRule($sort, $datas, $siteBaseCodes, $onlySite = null)
    {
        $ruleDatas = [];
        foreach ($datas as $data) {

            $siteCodes = $onlySite ? [$onlySite] : (!empty($data['only']) ? $data['only'] : $siteBaseCodes);
            $ruleDataOrigin = $data['data'];
        
            foreach ($siteCodes as $siteCode) {
			    $ruleDataOrigin['route'] = str_replace('{{SORT}}', $siteCode, $ruleDataOrigin['route']);
                $ruleData = $ruleDataMobile = $ruleDataOrigin;
                $ruleData['pattern'] = Yii::getAlias("@{$siteCode}.{$sort}url") . $ruleDataOrigin['pattern'];
                $ruleDatas[] = $ruleData;
                if ($data['mobile']) {
                    $ruleDataMobile['pattern'] = Yii::getAlias("@m.{$siteCode}.{$sort}url") . $ruleDataOrigin['pattern'];
                    $ruleDatas[] = $ruleDataMobile;
                }   
            }
        }
        
        //print_r($ruleDatas);exit();
        return $ruleDatas; 
    }
}
