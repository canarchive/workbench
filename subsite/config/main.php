<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

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
            'rules' => array_merge(require(__DIR__ . '/rules-decoration.php'), require(__DIR__ . '/rules-shoot.php')),
        ],
    ],

    'modules' => [
        'decoration' => [
            'class' => 'subsite\decoration\Module',
        ],
        'shoot' => [
            'class' => 'subsite\shoot\Module',
        ],
        'saccount' => [
            'class' => 'subsite\asssount\Module',
        ]
            ],
    'params' => $params,
];
