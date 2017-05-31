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
				['pattern' => '/upload/<table:\w+>/<field:\w+>', 'route' => '/upload/index'],
            ],
        ],
        'errorHandler' => [
            //'errorAction' => 'site/error',
        ],
        'request' => [
            'class' => 'common\components\Request',
        ],
    ],
];
