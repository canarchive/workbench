<?php
$rules = array_merge(require(dirname(__DIR__) . '/params-rule.php'), [
    'index' => [
        'data' => [
			'suffix' => '',
            'pattern' => '/',
            'route' => '/shoot/site/index', 
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
