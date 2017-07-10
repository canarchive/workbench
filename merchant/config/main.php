<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

$currentMain = require(__DIR__ . '/main-current.php');

return yii\helpers\ArrayHelper::merge([
    'id' => 'app-merchant',
    'basePath' => dirname(__DIR__),
    //'viewPath' => '@merchant/views',
    'controllerNamespace' => 'merchant\controllers',
    'components' => [
        'user' => [
            'identityClass' => 'merchant\models\User',
            'enableAutoLogin' => true,
            'loginUrl' => '/signin.html',
        ],
    ],

    'modules' => [
        'admin' => [
            'class' => 'merchant\admin\Module',
        ],
    ],

    'params' => $params,
], $currentMain);
