<?php
Yii::setAlias('common', dirname(__DIR__));
Yii::setAlias('console', dirname(dirname(__DIR__)) . '/console');
Yii::setAlias('backend', dirname(dirname(__DIR__)) . '/backend');
Yii::setAlias('spread', dirname(dirname(__DIR__)) . '/spread');
Yii::setAlias('merchant', dirname(dirname(__DIR__)) . '/merchant');
Yii::setAlias('subsite', dirname(dirname(__DIR__)) . '/subsite');
Yii::setAlias('baseapp', dirname(dirname(__DIR__)) . '/baseapp');
require_once(__DIR__ . '/bootstrap-local.php');
