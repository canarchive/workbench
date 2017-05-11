<?php
$rules = [
    Yii::getAlias('@keleurl') . '/' => '/kl/index', 
    Yii::getAlias('@keleurl') . '/kl-coupon' => '/kl/coupon', 
    Yii::getAlias('@keleurl') . '/kl-signup' => '/kl/signup', 
    'stat' => '/decoration/site/statistic',
    'hdenter' => '/site/hdenter',
    '/' => '/decoration/detail/home',
];
return $rules;

