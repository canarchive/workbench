<?php
return [
    Yii::getAlias('@gallerycmsurl') . '/test' => '/cmsad/site/test', 
    //Yii::getAlias('@wildurl') . '/' => '/cmsad/site/home',
    ['pattern' => Yii::getAlias('@wildurl') . '/', 'route' => '/cmsad/site/index', 'suffix' => ''],
    Yii::getAlias('@ad.cmsurl') . '/' => '/cmsad/site/index', 
    Yii::getAlias('@ad.cmsurl') . '/sp-<view:\w+>' => '/cmsad/single-page/index', 
    Yii::getAlias('@ad.cmsurl') . '/aboutus/<view:\w+>' => '/cmsad/aboutus/index', 
	[
        'suffix' => '/',
		'pattern' => Yii::getAlias('@ad.cmsurl') . '/sample/<page:\d+>',
		'route'	=> '/cmsad/sample/index',
		'defaults' => ['page' => 1],
	],
	[
        'suffix' => '/',
		'pattern' => Yii::getAlias('@ad.cmsurl') . '/info/<page:\d+>',
		'route'	=> '/cmsad/info/index',
		'defaults' => ['page' => 1],
	],

    Yii::getAlias('@m.gallerycmsurl') . '/' => '/cmsad/mobile-site/home', 
    //'/<_q:.*>' => '/cmsad/<_q>', 
];
