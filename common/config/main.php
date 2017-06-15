<?php
return [
    'timeZone'=>'Asia/Shanghai',
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'language' => 'zh-CN',
	'bootstrap' => [
        function () {
            if (!isset(Yii::$app->i18n->translations['rbac-admin'])) {
                Yii::$app->i18n->translations['rbac-admin'] = [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'sourceLanguage' => 'zh-CN',
                    'basePath' => '@common/messages'
                ];
                Yii::$app->i18n->translations['admin-common'] = [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'sourceLanguage' => 'en',
                    'basePath' => '@common/messages'
                ];
            }
        }
    ],

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
                ['pattern' => '/upload/<table:\w+>/<field:\w+>', 'route' => '/upload/index'],
            ],
        ],
        'assetManager' => [
            'basePath' => '@assetcustom/assets',
            'baseUrl' => '@asseturl/assets',
        ],
        'errorHandler' => [
            //'errorAction' => 'site/error',
        ],
        'request' => [
            'class' => 'common\components\Request',
        ],
    ],
];
