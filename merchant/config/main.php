<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

$routeRules = array_merge(
	require(__DIR__ . '/shoot/rule.php'),
	require(__DIR__ . '/flower/rule.php')
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
            'loginUrl' => ['/site/signin'],
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

    'as access' => [
        'class' => 'merchant\components\AccessControl',
        'allowActions' => [
            //'info/*',
            //'owner/*',
            'api/*',
            'site/*',
            'merchant-upload/*',
            'site/error',
            //'admin/site/index',
            'admin/site/signin',
            'admin/site/signup',
            'admin/site/logout',
            'product/*',
            'debug/*',
        ]
    ],

    'params' => $params,
];