<?php
return [
    ['pattern' => Yii::getAlias('@merchanturl') . '/', 'route' => '/site/index', 'suffix' => ''],
    '/sp-<code:\w+>' => '/product/index',
    'signin' => '/site/signin',
    'signup' => '/site/signup',
    'logout' => '/site/logout',

    'self' => '/info/index',
    'userlist' => '/user/index',
    '/report-<type:\w+>' => '/statistic/index',
];
