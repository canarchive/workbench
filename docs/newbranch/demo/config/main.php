<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-demo',
    'basePath' => dirname(__DIR__),
    'viewPath' => '@demo/views/default',
    'layout' => null,
    'bootstrap' => ['log'],
    'controllerNamespace' => 'demo\controllers',
    'components' => [
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],
    ],
    'modules' => [
        /*'submodule' => [
            'class' => 'demo\submodule\Module',
		],*/
    ],
    'params' => $params,
];
