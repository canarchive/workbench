<?php

namespace gallerycms\components;

use Yii;

class RuleFormat
{

    public static function formatRule($infos)
    {
        $paramsForRule = require(Yii::getAlias('@gallerycms') . '/config/params.php');
        $hostInfos = array_merge($paramsForRule['mHosts'], $paramsForRule['pcHosts']);
        $ruleDatas = [];
        foreach ($infos as $info) {
            $hosts = $info['hosts'];
        
            foreach ($info['hosts'] as $host) {
                $hostInfo = $hostInfos[$host];
                $ruleData = $info['data'];
                $ruleData['pattern'] = $hostInfo . $ruleData['pattern'];
                $ruleDatas[] = $ruleData;
            }
        }
        
        //print_r($ruleDatas);exit();
        return $ruleDatas; 
    }
}
