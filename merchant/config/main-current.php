<?php
$routeRules = array_merge(
	require(__DIR__ . '/decoration/rule.php')
);
//print_r($routeRules);exit();
return [
    'components' => [
		'urlManager' => [
            'rules' => $routeRules,
		],
	],
    'modules' => [
        'admin' => [
            'class' => 'merchant\admin\Module',
        ],
        'decoration' => [
            'class' => 'merchant\decoration\Module',
        ],
    ],
];
