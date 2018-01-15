<?php
$siteInfos = [
    'shoot' => [
        'domain' => 'shoot.com',
        'icp' => '京ICP备10039249-1号',
        'name' => '互联影像',
		'siteCheck' => '',
    ],
    'hstudio' => [
        'domain' => 'hh.com',
        'icp' => '京ICP备10039249-2号',
        'name' => '韩涵',
		'siteCheck' => '',
    ],
    'hgvisual' => [
        'domain' => 'hg.com',
        'icp' => '京ICP备10039249-2号',
        'name' => '红格',
		'siteCheck' => '',
    ],
    'toteme' => [
        'domain' => 'toteme.com',
        'icp' => '京ICP备10039249-2号',
        'name' => '途睿',
		'siteCheck' => '',
    ],
    /*'eale' => [
        'domain' => 'eale.com',
        'icp' => '京ICP备10039249-2号',
        'name' => '右视觉',
		'siteCheck' => '',
	],*/
];
$str = $strReal = $strTdk = $hostStr = '';
foreach ($siteInfos as $siteKey => & $baseInfo) {
    //$str .= "Yii::setAlias('{$siteKey}.cmsurl', 'http://{$siteKey}.sinfo.alyee.com');\n";
    //$str .= "Yii::setAlias('m.{$siteKey}.cmsurl', 'http://m{$siteKey}.sinfo.alyee.com');\n";
    //$strReal .= "Yii::setAlias('{$siteKey}.cmsurl', 'http://www.{$baseInfo['domain']}');\n";
    //$strReal .= "Yii::setAlias('m.{$siteKey}.cmsurl', 'http://m.{$baseInfo['domain']}');\n";
	$hostStr .= '*.' . $baseInfo['domain'] . ',';
    $strTdk .= "// {$baseInfo['name']}\n";
    $strTdk .= "'{$siteKey}' => [\n    'site-index' => [\n        'title' => '{$baseInfo['name']}',\n        'keyword' => '{$baseInfo['name']}',\n        'description' => '{$baseInfo['name']}',\n    ],\n";
    $strTdk .= "    'single-page-smobile' => [\n        'title' => '{$baseInfo['name']}',\n        'keyword' => '{$baseInfo['name']}',\n        'description' => '{$baseInfo['name']}',\n    ],\n";
    $strTdk .= "    'single-page-sqq' => [\n        'title' => '{$baseInfo['name']}',\n        'keyword' => '{$baseInfo['name']}',\n        'description' => '{$baseInfo['name']}',\n    ],\n],\n";
    
    $baseInfo['pc'] = Yii::getAlias("@{$siteKey}.cmsurl");
    $baseInfo['mobile'] = Yii::getAlias("@m.{$siteKey}.cmsurl");
    $siteInfos[$siteKey] = $baseInfo;
}
//echo $strTdk;exit();
//echo $hostStr;exit();
//echo $str . $strReal;
return $siteInfos;
