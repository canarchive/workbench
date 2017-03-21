<?php
return [
    'timeZone'=>'Asia/Shanghai',
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'urlManager' => [
            'class' => 'yii\web\UrlManager',
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'suffix' => '.html',
            'rules' => [
                ['pattern' => '/demo-upload/<table:\w+>/<field:\w+>', 'route' => '/demo-upload/index', 'host' => Yii::getAlias('@demourl')],
            ],
        ],
        'assetManager' => [
            'basePath' => '@assetcustom/assets',
            'baseUrl' => '@asseturl/assets',
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'request' => [
            'class' => 'common\components\Request',
        ],
    ],
];
