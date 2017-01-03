<?php
$ruleInfos = [
    'info-show' => [
        'mobile' => true,
        'only' => [],
        'data' => [
            'pattern' => '/info/<id:\d+>',
            'route' => '/sinfo/info/show', 
        ],
    ],
    'sitemap' => [
        'mobile' => true,
        'only' => [],
        'data' => [
            'suffix' => '.xml',
            'pattern' => '/sitemap',
            'route' => '/sinfo/sitemap/index', 
        ],
    ],
    'index' => [
        'mobile' => true,
        'only' => [],
        'data' => [
            'pattern' => '/',
            'route' => '/sinfo/site/index', 
        ],
    ],
    'single-page' => [
        'mobile' => true,
        'only' => [],
        'data' => [
            'pattern' => '/sp-<view:\w+>',
            'route' => '/sinfo/single-page/index', 
        ],
    ],
    'aboutus' => [
        'mobile' => true,
        'only' => [],
        'data' => [
            'pattern' => '/<view:(guestbook|friendlink|record|contactus|aboutus)>',
            'route' => '/sinfo/aboutus/index', 
        ],
    ],
    'aboutus-statement' => [
        'mobile' => true,
        'only' => [],
        'data' => [
            'pattern' => '/<view:(attention|privacy|statement)>',
            'route' => '/sinfo/aboutus/index', 
        ],
    ],
    'info' => [
        'mobile' => true,
        'only' => [],
        'data' => [
            'suffix' => '/',
		    'pattern' => '/info<tag:_[a-zA-Z]+><page:_[0-9]+>',
		    'route'	=> '/sinfo/info/index',
		    'defaults' => ['page' => '_1', 'tag' => '_'],
        ],
	],
    'info-show' => [
        'mobile' => true,
        'only' => [],
        'data' => [
            'pattern' => '/info/<id:\d+>',
            'route' => '/sinfo/info/show', 
        ],
    ],
];

$siteInfos = require __DIR__ . '/site-infos.php';
$siteBaseCodes = array_keys($siteInfos);
$ruleDatas = [];
foreach ($ruleInfos as $ruleInfo) {
    $siteCodes = !empty($ruleInfo['only']) ? $ruleInfo['only'] : $siteBaseCodes;
    $ruleDataOrigin = $ruleInfo['data'];

    foreach ($siteCodes as $siteCode) {
        $ruleData = $ruleDataMobile = $ruleDataOrigin;
        $rulePatternPre = Yii::getAlias("@{$siteCode}.cmsurl");
        $ruleData['pattern'] = Yii::getAlias("@{$siteCode}.cmsurl") . $ruleDataOrigin['pattern'];
        $ruleDatas[] = $ruleData;
        if ($ruleInfo['mobile']) {
            $ruleDataMobile['pattern'] = Yii::getAlias("@m.{$siteCode}.cmsurl") . $ruleDataOrigin['pattern'];
            $ruleDatas[] = $ruleDataMobile;
        }
    }
}

//print_r($ruleDatas);exit();
return $ruleDatas; 
