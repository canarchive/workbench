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
    'id' => 'app-merchant',
    'basePath' => dirname(__DIR__),
    //'viewPath' => '@merchant/views',
    //'layout' => null,
    'bootstrap' => ['log'],
    'controllerNamespace' => 'merchant\controllers',
    'components' => [
        'user' => [
            'identityClass' => 'merchant\models\User',
            'enableAutoLogin' => true,
            'loginUrl' => '/signin.html',
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
            //'errorAction' => 'site/error',
        ],
        'urlManager' => [
            'rules' => $routeRules,
        ],
    ],

    'modules' => [
        'decoration' => [
            'class' => 'merchant\decoration\Module',
        ],
        'admin' => [
            'class' => 'merchant\admin\Module',
        ],
    ],

    'params' => $params,
];
