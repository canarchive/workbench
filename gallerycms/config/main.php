<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);
$routeRules = array_merge(
    ['tmp' => '/tmp/test'],
    require(__DIR__ . '/eale/rule.php'),
    require(__DIR__ . '/shoot/rule.php')
);
//print_r($routeRules);exit();
return [
    'id' => 'app-gallerycms',
    'basePath' => dirname(__DIR__),
    'viewPath' => '@gallerycms/views/default',
    'layout' => null,
    'bootstrap' => ['log'],
    'controllerNamespace' => 'gallerycms\controllers',
    'components' => [
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'urlManager' => [
            'enableStrictParsing' => true,
			'rules' => $routeRules,
		],
    ],
    'modules' => [
        'eale' => [
            'class' => 'gallerycms\eale\Module',
        ],
        'shoot' => [
            'class' => 'gallerycms\shoot\Module',
        ],
    ],
    'params' => $params,
];
