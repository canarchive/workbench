<?php
$routeRules = array_merge(
	require(__DIR__ . '/shoot/rule.php')
);
//print_r($routeRules);exit();
return [
    'components' => [
		'urlManager' => [
            'rules' => $routeRules,
		],
	],
    'modules' => [
        'shoot' => [
            'class' => 'ifeed\shoot\Module',
        ],
    ],
];
