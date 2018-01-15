<?php

$ruleInfos = [
    'index' => [
        'mobile' => true,
        'only' => [],
        'data' => [
            'pattern' => '/',
            'route' => '/eale/site/index', 
        ],
    ],
    'aboutus-guestbook' => [
        'mobile' => true,
        'only' => [],
        'data' => [
            'pattern' => '/guestbook',
            'route' => '/eale/aboutus/guestbook', 
        ],
    ],
    'aboutus' => [
        'mobile' => true,
        'only' => [],
        'data' => [
            'pattern' => '/<view:(joinus|desc|contactus|company|customer|star)>',
            'route' => '/eale/aboutus/index', 
        ],
    ],
    'sample-list' => [
        'mobile' => true,
        'only' => [],
    	'data' => [
            'suffix' => '/',
    		'pattern' => '/<sort:(work|studentwork|student|commercial|fashion|people|star|wedding|campus)>/<page:\d+>',
    		'route'	=> '/eale/sample/index',
    		'defaults' => ['page' => 1],
    	],
    ],
    'search-list' => [
        'mobile' => true,
        'only' => [],
    	'data' => [
            'suffix' => '/',
            'pattern' => '/search/<page:\d+>',
    		'route'	=> '/eale/sample/search',
    		'defaults' => ['page' => 1],
    	],
    ],
    'tag-list' => [
        'mobile' => true,
        'only' => ['eale', 'ieale'],
    	'data' => [
            'suffix' => '/',
            'pattern' => '/tag/<tag:\w+>/<page:\d+>',
    		'route'	=> '/eale/sample/tag',
    		'defaults' => ['page' => 1],
    	],
    ],
    'sample-show' => [
        'mobile' => true,
        'only' => [],
        'data' => [
            'pattern' => '/sample/<id:\d+>',
            'route' => '/eale/sample/show', 
        ],
    ],
    'service-list' => [
        'mobile' => true,
        'only' => ['ieale', 'eale'],
    	'data' => [
            'suffix' => '/',
    		'pattern' => '/service/<page:\d+>',
    		'route'	=> '/eale/service/index',
    		'defaults' => ['page' => 1],
    	],
    ],
    'service-show' => [
        'mobile' => true,
        'only' => ['ieale', 'eale'],
        'data' => [
            'pattern' => '/service/<id:\d+>',
            'route' => '/eale/service/show', 
        ],
    ],
    'info-list' => [
        'mobile' => true,
        'only' => [],
    	'data' => [
            'suffix' => '/',
    		'pattern' => '/<sort:(info|train)>/<page:\d+>',
    		'route'	=> '/eale/info/index',
    		'defaults' => ['page' => 1],
    	],
    ],
    'info-show' => [
        'mobile' => true,
        'only' => [],
        'data' => [
            'pattern' => '/info/<id:\d+>',
            'route' => '/eale/info/show', 
        ],
    ],
    'smap' => [
        'mobile' => true,
        'only' => [],
    	'data' => [
            'suffix' => '.html',
    		'pattern' => '/sitemap',
    		'route'	=> '/eale/site/map',
    	],
    ],
    'sitemap' => [
        'mobile' => true,
        'only' => [],
    	'data' => [
            'suffix' => '.xml',
    		'pattern' => '/sitemap',
    		'route'	=> '/eale/sitemap/index',
    	],
    ],

];

$siteBaseCodes = ['eale', 'ieale', 'iealecn'];
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
