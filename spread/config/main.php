<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

$routeRules = [];//array_merge(
	//require(__DIR__ . '/module/rule.php')
//);
//print_r($routeRules);exit();

return [
    'id' => 'app-spread',
    'basePath' => dirname(__DIR__),
    //'viewPath' => '@spread/views',
    'controllerNamespace' => 'spread\controllers',
    'components' => [
        'urlManager' => [
            'rules' => array_merge(require(__DIR__ . '/rules.php')),
        ],
    ],

    'modules' => [
    ],
    'params' => $params,
];
