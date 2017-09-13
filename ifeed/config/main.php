<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

$currentMain = require(__DIR__ . '/main-current.php');

return yii\helpers\ArrayHelper::merge([
    'id' => 'app-ifeed',
    'basePath' => dirname(__DIR__),
    //'viewPath' => '@merchant/views',
    'controllerNamespace' => 'ifeed\controllers',
    'components' => [
        'user' => [
            'identityClass' => 'passport\models\User',
            'enableAutoLogin' => true,
            'loginUrl' => '/signin.html',
        ],
    ],

    'params' => $params,
], $currentMain);
