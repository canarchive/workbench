<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

$routeRules = [];

return [
    'id' => 'app-demo',
    'basePath' => dirname(__DIR__),
	//'viewPath' => '@app/views/default',
    'controllerNamespace' => 'demo\controllers',
    'components' => [
        'urlManager' => [
            'rules' => $routeRules,
        ],
    ],

    'params' => $params,
];
