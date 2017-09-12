<?php
$rules = array_merge(require(dirname(__DIR__) . '/params-rule.php'), [
    'index' => [
		'ignoreDomain' => true,
        'data' => [
			'suffix' => '',
            'pattern' => Yii::getAlias('@shoot.ifeedurl'),
            'route' => '/shoot/site/index', 
        ],
    ],
    'sort' => [
		'ignoreDomain' => true,
        'data' => [
			'suffix' => '',
            'pattern' => Yii::getAlias('@sort.ifeedurl'),
            'route' => '/shoot/sample/index', 
        ],
    ],
    'merchant' => [
		'ignoreDomain' => true,
        'data' => [
			'suffix' => '',
            'pattern' => Yii::getAlias('@merchant.ifeedurl'),
            'route' => '/shoot/site/index', 
        ],
    ],
    'merchantsort' => [
		'ignoreDomain' => true,
        'data' => [
			'suffix' => '',
            'pattern' => Yii::getAlias('@merchantsort.ifeedurl'),
            'route' => '/shoot/site/index', 
        ],
    ],
    'sitemap' => [
        'data' => [
            'suffix' => '.xml',
            'pattern' => '/sitemap',
            'route' => '/shoot/sitemap/index', 
        ],
    ],
    /*'sample-show' => [
        'data' => [
            'suffix' => '.html',
    		'pattern' => '/caseshow_<id:\d+>',
    		'route'	=> '/shoot/sample/show',
        ],
    ],
    'sample-list' => [
        'data' => [
            'suffix' => '/',
    		'pattern' => '/case<sort:_[a-zA-Z_\-]+><page:_[0-9]+>',
    		'route'	=> '/shoot/sample/index',
    		'defaults' => ['page' => '_1', 'sort' => '_'],
        ],
    ],
    'aboutus' => [
        'data' => [
            'pattern' => '/<view:(guarantee|flow|contactus|aboutus)>',
            'route' => '/shoot/aboutus/index', 
        ],
    ],
    'presell-signup' => [
        'data' => [
            'pattern' => '/pre-signup',
            'route' => '/{{SORT}}/presell/signup',
        ],  
    ],*/
]);
return \common\helpers\RuleFormat::formatRule($rules, require(dirname(__DIR__) . '/params-site.php'));
