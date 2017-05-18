<?php
    ['pattern' => Yii::getAlias('@merchanturl') . '/', 'route' => '/site/index', 'suffix' => ''],
    '/sp-<code:\w+>' => '/product/index',
    'signin' => '/site/signin',
    'signup' => '/site/signup',
    'logout' => '/site/logout',

    '/admin' => '/admin/site/index',
    'userlist' => '/user/index',
    '/report-<type:\w+>' => '/statistic/index',
$ruleInfos = [
    'index' => [
        'hosts' => ['merchant'],
        'mobile' => true,
        'data' => [
            'suffix' => '',
            'pattern' => '/',
            'route' => '/site/index', 
        ],
    ],
    'single-page' => [
        'hosts' => ['merchant'],
        'mobile' => true,
        'data' => [
            'suffix' => '.html',
    		'pattern' => '/sp-<code:\w+>',
    		'route'	=> '/product/index',
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
