<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

$routeRules = array_merge(
	require(__DIR__ . '/decoration/rule.php')
);
//print_r($routeRules);exit();

return [
    'id' => 'app-subsite',
    'basePath' => dirname(__DIR__),
    //'viewPath' => '@subsite/views',
    'layout' => null,
    'bootstrap' => ['log'],
    'controllerNamespace' => 'subsite\controllers',
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
            'rules' => $routeRules,
        ],
    ],

    'modules' => [
        'decoration' => [
            'class' => 'subsite\decoration\Module',
        ],
    ],
    'params' => $params,
];
