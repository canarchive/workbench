<?php
$rules = array_merge(require(dirname(__DIR__) . '/params-rule.php'), [
    'mindex' => [
		'noDomain' => true,
        'data' => [
			'suffix' => '',
            'pattern' => Yii::getAlias('@m.shoot.ifeedurl'),
            'route' => '/shoot/site/index', 
        ],
    ],
    'mmerchant' => [
		'noDomain' => true,
        'data' => [
			'suffix' => '/',
            'pattern' => Yii::getAlias('@m.shoot.ifeedurl') . '/sj<mcode:(eale|hstudio)>',
            'route' => '/shoot/site/index', 
        ],
    ],
    'index' => [
		'noDomain' => true,
        'data' => [
			'suffix' => '',
            'pattern' => Yii::getAlias('@shoot.ifeedurl'),
            'route' => '/shoot/site/index', 
        ],
    ],
    'merchantsort' => [
		'noDomain' => true,
        'data' => [
			'suffix' => '/',
            'pattern' => Yii::getAlias('@merchantsort.ifeedurl') . '/<page:[0-9]+>',
    		'defaults' => ['page' => '1'],
            'route' => '/shoot/sample/index', 
        ],
    ],
    'sort' => [
		'noDomain' => true,
        'data' => [
			'suffix' => '/',
            'pattern' => Yii::getAlias('@sort.ifeedurl') . '/<page:[0-9]+>',
    		'defaults' => ['page' => '1'],
            'route' => '/shoot/sample/index', 
        ],
    ],
    'merchant' => [
		'noDomain' => true,
        'data' => [
			'suffix' => '',
            'pattern' => Yii::getAlias('@merchant.ifeedurl'),
            'route' => '/shoot/site/index', 
        ],
    ],
    'msort' => [
		'noDomain' => true,
        'data' => [
			'suffix' => '/',
            'pattern' => Yii::getAlias('@m.shoot.ifeedurl') . '/lm<scode:\w+>/<page:[0-9]+>',
    		'defaults' => ['page' => '1'],
            'route' => '/shoot/sample/index', 
        ],
    ],
    'mmerchantsort' => [
		'noDomain' => true,
        'data' => [
			'suffix' => '/',
            'pattern' => Yii::getAlias('@m.shoot.ifeedurl') . '/sj<mcode:(eale|hstudio)>-lm<scode:\w+>/<page:[0-9]+>',
    		'defaults' => ['page' => '1'],
            'route' => '/shoot/sample/index', 
        ],
    ],
    'aboutus-mobile' => [
        'noDomain' => true,
        'data' => [
            'pattern' => Yii::getAlias('@m.shoot.ifeedurl') . '/sj<mcode:(eale|hstudio)>/<view:(guarantee|flow|contactus|aboutus)>',
            'route' => '/shoot/aboutus/index', 
        ],
    ],
    'aboutus' => [
		'only' => ['shoot', 'merchant'],
        'data' => [
            'pattern' => '/<view:(guarantee|flow|contactus|aboutus)>',
            'route' => '/shoot/aboutus/index', 
        ],
    ],
    'stat' => [
        'data' => [
            'pattern' => '/stat',
            'route' => '/site/stat', 
        ],
    ],
    'sample-show-m' => [
		'noDomain' => true,
        'data' => [
            'suffix' => '.html',
    		'pattern' => Yii::getAlias('@m.shoot.ifeedurl') . '/sj<mcode:(eale|hstudio)>/caseshow_<id:\d+>',
    		'route'	=> '/shoot/sample/show',
        ],
    ],
    'sample-show' => [
		'only' => ['shoot', 'merchant'],
        'data' => [
            'suffix' => '.html',
    		'pattern' => '/caseshow_<id:\d+>',
    		'route'	=> '/shoot/sample/show',
        ],
    ],
    /*'sitemap' => [
		'only' => ['shoot', 'merchant'],
        'data' => [
            'suffix' => '.xml',
            'pattern' => '/sitemap',
            'route' => '/shoot/sitemap/index', 
        ],
	],*/
]);
return \common\helpers\RuleFormat::formatRule($rules, require(dirname(__DIR__) . '/params-site.php'));
