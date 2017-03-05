<?php
return [
    'timeZone'=>'Asia/Shanghai',
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'assetManager' => [
            'basePath' => '@assetcustom/assets',
            'baseUrl' => '@asseturl/assets',
        ],
        'urlManager' => [
            'class' => 'yii\web\UrlManager',
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'suffix' => '.html',
            'rules' => [
                ['pattern' => '/gallerycms-upload/<table:\w+>/<field:\w+>', 'route' => '/house/gallerycms-upload/index', 'host' => Yii::getAlias('@gallerycmsurl')],
                ['pattern' => '/merchant-upload/<table:\w+>/<field:\w+>', 'route' => '/merchant/merchant-upload/index', 'host' => Yii::getAlias('@gallerycmsurl')],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'request' => [
            'class' => 'common\components\Request',
        ],
    ],
];
