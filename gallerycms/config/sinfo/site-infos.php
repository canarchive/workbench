<?php
$siteInfos = [
    'h5tj' => [
        'domain' => 'h5tj.com',
        'name' => '移动访客精灵',
    ],
    'h5qz' => [
        'domain' => 'h5qz.com',
        'name' => '搜客宝访客统计',
    ],
    'shoujiyunzhuaqu' => [
        'domain' => 'shoujiyunzhuaqu.com',
        'name' => '松松手机云抓取',
    ],
    'teltongji' => [
        'domain' => 'teltongji.com',
        'name' => '小蜜蜂手机号码抓取',
    ],
    'zhuaquyun' => [
        'domain' => 'zhuaquyun.com',
        'name' => '云销客抓取',
    ],
    'shoujiyuntongji' => [
        'domain' => 'shoujiyuntongji.com',
        'name' => '手机云统计',
    ],
    'shoujihaozhuaqu' => [
        'domain' => 'shoujihaozhuaqu.com',
        'name' => '手机号抓取',
    ],
    'qqyuntongji' => [
        'domain' => 'qqyuntongji.com',
        'name' => 'qq云统计',
    ],
];
$str = $strReal = $strTdk = '';
foreach ($siteInfos as $siteKey => & $baseInfo) {
    //$str .= "Yii::setAlias('{$siteKey}.cmsurl', 'http://{$siteKey}.sinfo.alyee.com');\n";
    //$str .= "Yii::setAlias('m.{$siteKey}.cmsurl', 'http://m{$siteKey}.sinfo.alyee.com');\n";
    //$strReal .= "Yii::setAlias('{$siteKey}.cmsurl', 'http://www.{$baseInfo['domain']}');\n";
    //$strReal .= "Yii::setAlias('m.{$siteKey}.cmsurl', 'http://m.{$baseInfo['domain']}');\n";
    $strTdk .= "// {$baseInfo['name']}\n";
    $strTdk .= "'{$siteKey}' => [\n    'site-index' => [\n        'title' => '{$baseInfo['name']}',\n        'keyword' => '{$baseInfo['name']}',\n        'description' => '{$baseInfo['name']}',\n    ],\n";
    $strTdk .= "    'single-page-smobile' => [\n        'title' => '{$baseInfo['name']}',\n        'keyword' => '{$baseInfo['name']}',\n        'description' => '{$baseInfo['name']}',\n    ],\n";
    $strTdk .= "    'single-page-sqq' => [\n        'title' => '{$baseInfo['name']}',\n        'keyword' => '{$baseInfo['name']}',\n        'description' => '{$baseInfo['name']}',\n    ],\n],\n";
    
    $baseInfo['pc'] = Yii::getAlias("@{$siteKey}.cmsurl");
    $baseInfo['mobile'] = Yii::getAlias("@m.{$siteKey}.cmsurl");
    $siteInfos[$siteKey] = $baseInfo;
}
//echo $strTdk;exit();
//echo $str . $strReal;
return $siteInfos;

return [
    'sqq' => [
        'name' => '抓球',
        'domain' => 'sqabcq.com',
        'url' => Yii::getAlias('@sqq.cmsurl'),
        'urlMobile' => Yii::getAlias('@m.sqq.cmsurl'),
    ],
    'smobile' => [
        'name' => '抓手',
        'domain' => 'smobilss.com',
        'url' => Yii::getAlias('@smobile.cmsurl'),
        'urlMobile' => Yii::getAlias('@m.smobile.cmsurl'),
    ],
    'sinfo' => [
        'name' => '抓信',
        'domain' => 'sinfosss.com',
        'url' => Yii::getAlias('@sinfo.cmsurl'),
        'urlMobile' => Yii::getAlias('@m.sinfo.cmsurl'),
    ],
];
