<?php
return [];
$rules = [
    'bm-<view:\w+>-<city_code:\w+>' => 'decoration/detail/feature',
    'jz-signup' => '/decoration/signup/index',
    'jz-signup-tview' => '/decoration/signup/tview',
    'jz-signup-cms' => '/decoration/signup/cms',
    'stat1' => '/shoot/site/statistic',
    'hdenter' => '/site/hdenter',
    '/' => '/site/index',
];

$gallerycmsRules = [];//require Yii::getAlias('@gallerycms') . '/config/rules-house.php';
return array_merge($rules, $gallerycmsRules);
