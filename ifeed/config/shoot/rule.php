<?php
$rules = array_merge(require(dirname(__DIR__) . '/params-rule.php'), [
    'index' => [
        'data' => [
			'suffix' => '',
            'pattern' => '/',
            'route' => '/shoot/site/index', 
        ],
    ],
    'sample-show' => [
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
    /*'presell-signup' => [
        'data' => [
            'pattern' => '/pre-signup',
            'route' => '/{{SORT}}/presell/signup',
        ],  
    ],*/
]);
return \common\helpers\RuleFormat::formatRule($rules, require(dirname(__DIR__) . '/params-site.php'));
