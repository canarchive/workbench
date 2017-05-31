<?php

/*$routeRules = array_merge(
	require(__DIR__ . '/admin/rule.php')
);*/
//print_r($routeRules);exit();

return [
    /*'components' => [
        'urlManager' => [
            'rules' => $routeRules,
        ],
	],*/

    'modules' => [
        /*'decoration' => [
            'class' => 'merchant\decoration\Module',
        ],*/
    ],

    'as access' => [
        'class' => 'merchant\components\AccessControl',
        'allowActions' => [
            //'info/*',
            //'owner/*',
            'api/*',
			'admin/decoration/test/*',
            'decoration/entrance/*',
            'decoration/site/*',
            'decoration/product/*',
            'merchant-upload/*',
            'site/error',
            //'admin/site/index',
            'debug/*',
        ]
    ],
];
