<?php
$ruleInfos = [
    'info-show' => [
        'mobile' => true,
        'only' => [],
        'data' => [
            'pattern' => '/info/<id:\d+>',
            'route' => '/shoot/info/show', 
        ],
    ],
    'activity-show' => [
        'hosts' => ['base', 'm', '3g', 'wap'],
        'mobile' => true,
        'data' => [
            'suffix' => '.html',
    		'pattern' => '/ashow_<id:\d+>',
    		'route'	=> '/shoot/activity/show',
        ],
    ],
    'activity-list' => [
        'hosts' => ['base', 'm', '3g', 'wap'],
        'mobile' => true,
        'data' => [
            'suffix' => '/',
    		'pattern' => '/activity<sort:_[a-zA-Z_\-]+><page:_[0-9]+>',
    		'route'	=> '/shoot/activity/index',
    		'defaults' => ['page' => '_1', 'sort' => '_'],
        ],
    ],
    'sample-show' => [
        'hosts' => ['base', 'm', '3g', 'wap'],
        'mobile' => true,
        'data' => [
            'suffix' => '.html',
    		'pattern' => '/caseshow_<id:\d+>',
    		'route'	=> '/shoot/sample/show',
        ],
    ],
    'sample-list' => [
        'hosts' => ['base', 'm', '3g', 'wap'],
        'mobile' => true,
        'data' => [
            'suffix' => '/',
    		'pattern' => '/case<sort:_[a-zA-Z_\-]+><page:_[0-9]+>',
    		'route'	=> '/shoot/sample/index',
    		'defaults' => ['page' => '_1', 'sort' => '_'],
        ],
    ],
    'signup' => [
        'mobile' => true,
        'only' => [],
        'data' => [
            'pattern' => '/signup',
            'route' => '/shoot/signup/index', 
        ],
    ],
    'apply' => [
        'mobile' => true,
        'only' => [],
        'data' => [
            'pattern' => '/apply',
            'route' => '/shoot/apply/index', 
        ],
    ],
    'sitemap' => [
        'mobile' => true,
        'only' => [],
        'data' => [
            'suffix' => '.xml',
            'pattern' => '/sitemap',
            'route' => '/shoot/sitemap/index', 
        ],
    ],
    'index' => [
        'mobile' => true,
        'only' => [],
        'data' => [
            'pattern' => '/',
            'route' => '/shoot/site/index', 
        ],
    ],
    'aboutus' => [
        'mobile' => true,
        'only' => [],
        'data' => [
            'pattern' => '/<view:(guarantee|flow|contactus|aboutus)>',
            'route' => '/shoot/aboutus/index', 
        ],
    ],
    'info' => [
        'mobile' => true,
        'only' => [],
        'data' => [
            'suffix' => '/',
		    'pattern' => '/info<tag:_[a-zA-Z]+><page:_[0-9]+>',
		    'route'	=> '/shoot/info/index',
		    'defaults' => ['page' => '_1', 'tag' => '_'],
        ],
	],
    'info-show' => [
        'mobile' => true,
        'only' => [],
        'data' => [
            'pattern' => '/info/<id:\d+>',
            'route' => '/shoot/info/show', 
        ],
    ],
    'stat' => [
        'mobile' => true,
        'only' => [],
        'data' => [
            'pattern' => '/stat',
            'route' => '/site/stat', 
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
