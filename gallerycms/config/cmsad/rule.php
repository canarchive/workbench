<?php
return [
    Yii::getAlias('@gallerycmsurl') . '/test' => '/cmsad/site/test', 
    Yii::getAlias('@ad.cmsurl') . '/' => '/cmsad/site/index', 
    Yii::getAlias('@ad.cmsurl') . '/sp-<view:\w+>' => '/cmsad/single-page/index', 
    Yii::getAlias('@ad.cmsurl') . '/friendlink' => '/cmsad/aboutus/friendlink', 
    Yii::getAlias('@ad.cmsurl') . '/guestbook' => '/cmsad/aboutus/guestbook', 
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
		'pattern' => Yii::getAlias('@ad.cmsurl') . '/info/<tag:\w+>/<page:\d+>',
		'route'	=> '/cmsad/info/index',
		'defaults' => ['tag' => '', 'page' => 1],
	],
    Yii::getAlias('@ad.cmsurl') . '/info/<id:\d+>' => '/cmsad/info/show', 

    Yii::getAlias('@m.ad.cmsurl') . '/' => '/cmsad/mobile-site/index', 
    Yii::getAlias('@m.ad.cmsurl') . '/sp-<view:\w+>' => '/cmsad/mobile-single-page/index', 
    Yii::getAlias('@m.ad.cmsurl') . '/aboutus/<view:\w+>' => '/cmsad/mobile-aboutus/index', 
	[
        'suffix' => '/',
		'pattern' => Yii::getAlias('@m.ad.cmsurl') . '/sample/<page:\d+>',
		'route'	=> '/cmsad/mobile-sample/index',
		'defaults' => ['page' => 1],
	],
    Yii::getAlias('@m.ad.cmsurl') . '/sample/<id:\d+>' => '/cmsad/mobile-sample/show', 
	[
        'suffix' => '/',
		'pattern' => Yii::getAlias('@m.ad.cmsurl') . '/info/<tag:\w+>/<page:\d+>',
		'route'	=> '/cmsad/mobile-info/index',
		'defaults' => ['tag' => '', 'page' => 1],
	],
    Yii::getAlias('@m.ad.cmsurl') . '/info/<id:\d+>' => '/cmsad/mobile-info/show', 
    //'/<_q:.*>' => '/cmsad/mobile-<_q>', 
];
