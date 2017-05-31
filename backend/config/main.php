<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-backend',
    'basePath' => dirname(__DIR__),
    'viewPath' => '@backend/views/charisma',
    'bootstrap' => [
        'log',
    ],
    'controllerNamespace' => 'backend\controllers',
    'components' => [
        'user' => [
            'identityClass' => 'backend\models\Manager',
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
        'authManager' => [
            //'class' => 'yii\rbac\PhpManager',
            'class' => 'yii\rbac\DbManager',
        ]
    ],

    'as access' => [
        'class' => 'backend\components\AccessControl',
        'allowActions' => [
            'site/login',
            'site/logout',
            'site/error',
            'backend-upload/*',
            'debug/*',
        ]
    ],

    'modules' => [
    ],
    'language' => 'zh-CN',

    'params' => $params,
];
