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
    'bootstrap' => ['log'],
		'bootstrap' => [
		'log',
		function () {
            if (!isset(Yii::$app->i18n->translations['rbac-admin'])) {
                Yii::$app->i18n->translations['rbac-admin'] = [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'sourceLanguage' => 'en',
                    'basePath' => '@backend/messages'
                ];
                Yii::$app->i18n->translations['admin-common'] = [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'sourceLanguage' => 'en',
                    'basePath' => '@backend/messages'
                ];
            }
            //user did not define the Navbar?
        }
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

    //'layout' => 'left-menu',
    'as access' => [
        'class' => 'backend\components\AccessControl',
        'allowActions' => [
			'site/login',
			'site/logout',
			'site/error',
            'debug/*',
        ]
    ],

	'modules' => [
		'gallerycms' => [
			'class' => 'backend\gallerycms\Module',
		],
	],
	'language' => 'zh-CN',

    'params' => $params,
];
