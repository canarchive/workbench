<?php
return [                      
    'components' => [
        'dbCommon' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=10.46.166.240;dbname=work_common',
            'username' => 'duser_ad',
            'password' => 'ADdata!@#',
            'charset' => 'utf8',
            'tablePrefix' => 'wc_'
        ],
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=10.46.166.240;dbname=workplat_passport',
            'username' => 'duser_ad',
            'password' => 'ADdata!@#',
            'charset' => 'utf8',
            'tablePrefix' => 'wp_'
        ],
        'dbMerchant' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=10.46.166.240;dbname=workplat_merchant',
            'username' => 'duser_ad',
            'password' => 'ADdata!@#',
            'charset' => 'utf8',
            'tablePrefix' => 'wm_'
        ],
        'dbSubsite' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=10.46.166.240;dbname=workplat_subsite',
            'username' => 'duser_ad',
            'password' => 'ADdata!@#',
            'charset' => 'utf8',
            'tablePrefix' => 'wd_'
        ],
        'dbSpread' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=10.46.166.240;dbname=workplat_spread',
            'username' => 'duser_ad',
            'password' => 'ADdata!@#',
            'charset' => 'utf8',
            'tablePrefix' => 'wd_'
        ],
        'dbStatistic' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=10.46.166.240;dbname=workplat_statistic',
            'username' => 'duser_ad',
            'password' => 'ADdata!@#',
            'charset' => 'utf8',
            'tablePrefix' => 'ws_'
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@common/mail',
            'useFileTransport' => true,
        ],
    ],
];
