<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-spread',
    'basePath' => dirname(__DIR__),
    //'viewPath' => '@spread/views',
    'layout' => null,
    'bootstrap' => ['log'],
    'controllerNamespace' => 'spread\controllers',
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
            'rules' => array_merge(require(__DIR__ . '/rules.php')),
        ],
    ],

    'modules' => [
        'decoration' => [
            'class' => 'spread\decoration\Module',
        ],
        'shoot' => [
            'class' => 'spread\shoot\Module',
        ],
        'saccount' => [
            'class' => 'spread\asssount\Module',
        ]
            ],
    'params' => $params,
];
