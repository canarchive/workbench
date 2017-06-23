<?php
$config = [];
if (!YII_ENV_TEST) {
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        'allowedIPs' =>  ['127.0.0.1'],
    ];

    /*$config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
    ];*/
}

return array_merge($config, [
    'components' => [
        'dbCommon' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=work_common',
            'username' => 'user',
            'password' => 'password',
            'charset' => 'utf8',
            'tablePrefix' => 'wc_'
        ],
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=workplat_passport',
            'username' => 'user',
            'password' => 'password',
            'charset' => 'utf8',
            'tablePrefix' => 'wp_'
        ],
        'dbMerchant' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=workplat_merchant',
            'username' => 'user',
            'password' => 'password',
            'charset' => 'utf8',
            'tablePrefix' => 'wm_'
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@common/mail',
            'useFileTransport' => true,
        ],
    ],
]);
