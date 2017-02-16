<?php
return [
    [
        'suffix' => '.xml',
        'pattern' => Yii::getAlias('@ad.cmsurl') . '/sitemap',
        'route' => '/cmsad/sitemap/index',
    ],
    Yii::getAlias('@ad.cmsurl') . '/' => '/cmsad/site/index', 
    Yii::getAlias('@ad.cmsurl') . '/sp-<view:\w+>' => '/cmsad/single-page/index', 
    Yii::getAlias('@ad.cmsurl') . '/friendlink' => '/cmsad/aboutus/friendlink', 
    Yii::getAlias('@ad.cmsurl') . '/guestbook' => '/cmsad/aboutus/guestbook', 
    Yii::getAlias('@ad.cmsurl') . '/record' => '/cmsad/aboutus/record', 
    Yii::getAlias('@ad.cmsurl') . '/aboutus/<view:\w+>' => '/cmsad/aboutus/index', 
    Yii::getAlias('@ad.cmsurl') . '/<view:(attention|privacy|statement)>' => '/cmsad/aboutus/statement', 
	[
        'suffix' => '/',
		'pattern' => Yii::getAlias('@ad.cmsurl') . '/sample/<page:\d+>',
		'route'	=> '/cmsad/sample/index',
		'defaults' => ['page' => 1],
	],
    Yii::getAlias('@ad.cmsurl') . '/sample/<id:\d+>' => '/cmsad/sample/show', 
	[
        'suffix' => '/',
		'pattern' => Yii::getAlias('@ad.cmsurl') . '/info<tag:_[a-zA-Z]+><page:_[0-9]+>',
		'route'	=> '/cmsad/info/index',
		'defaults' => ['page' => '_1', 'tag' => '_'],
	],
    Yii::getAlias('@ad.cmsurl') . '/info/<id:\d+>' => '/cmsad/info/show', 

    [
        'suffix' => '.xml',
        'pattern' => Yii::getAlias('@m.ad.cmsurl') . '/sitemap',
        'route' => '/cmsad/mobile-sitemap/index',
    ],
    Yii::getAlias('@m.ad.cmsurl') . '/' => '/cmsad/mobile-site/index', 
    Yii::getAlias('@m.ad.cmsurl') . '/sp-<view:\w+>' => '/cmsad/mobile-single-page/index', 
    Yii::getAlias('@m.ad.cmsurl') . '/aboutus/<view:\w+>' => '/cmsad/mobile-aboutus/index', 
    Yii::getAlias('@m.ad.cmsurl') . '/record' => '/cmsad/mobile-aboutus/record', 
	[
        'suffix' => '/',
		'pattern' => Yii::getAlias('@m.ad.cmsurl') . '/sample/<page:\d+>',
		'route'	=> '/cmsad/mobile-sample/index',
		'defaults' => ['page' => 1],
	],
    Yii::getAlias('@m.ad.cmsurl') . '/sample/<id:\d+>' => '/cmsad/mobile-sample/show', 
	[
        'suffix' => '/',
		'pattern' => Yii::getAlias('@m.ad.cmsurl') . '/info<tag:_[a-zA-Z]+><page:_[0-9]+>',
		'route'	=> '/cmsad/mobile-info/index',
		'defaults' => ['page' => '_1', 'tag' => '_'],
	],
    Yii::getAlias('@m.ad.cmsurl') . '/info/<id:\d+>' => '/cmsad/mobile-info/show', 
    //'/<_q:.*>' => '/cmsad/mobile-<_q>', 
];