<?php
$routeRules = array_merge(
	[]//require(__DIR__ . '//rule.php')
);
//print_r($routeRules);exit();
return [
    'components' => [
		'urlManager' => [
            'rules' => $routeRules,
		],
	],
    'modules' => [
        '' => [
            'class' => 'merchant\\Module',
        ],
    ],
];
