<?php
$rules = [
    Yii::getAlias('@keleurl') . '/' => '/third/index', 
    Yii::getAlias('@keleurl') . '/kl-coupon' => '/third/coupon', 
    Yii::getAlias('@keleurl') . '/kl-signup' => '/third/signup', 
    Yii::getAlias('@hlspreadurl') . '/' => '/decoration/detail/hl', 
    'bm-<view:\w+>-<city_code:\w+>' => 'decoration/detail/feature',
    'yy-<view:\w+>-<city_code:\w+>' => 'decoration/spread-page/index',
    'jz-signup' => '/decoration/signup/index',
    'jz-signup-cms' => '/decoration/signup/cms',
    'stat' => '/decoration/site/statistic',
    'hdenter' => '/site/hdenter',
    //'/' => '/site/index',
    '/' => '/decoration/detail/home',
    'api-user-<code:\w+>' => '/decoration/site/api-third',
    'tsform' => '/decoration/detail/tsform',
    'jr-bm' => '/decoration/detail/jrform',
];

$gallerycmsRules = [];//require Yii::getAlias('@gallerycms') . '/config/rules-house.php';
return array_merge($rules, $gallerycmsRules);
