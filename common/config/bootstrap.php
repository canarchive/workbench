<?php
Yii::setAlias('common', dirname(__DIR__));
Yii::setAlias('console', dirname(dirname(__DIR__)) . '/console');
Yii::setAlias('backend', dirname(dirname(__DIR__)) . '/backend');
Yii::setAlias('gallerycms', dirname(dirname(__DIR__)) . '/gallerycms');
Yii::setAlias('baseapp', dirname(dirname(__DIR__)) . '/baseapp');
require_once(__DIR__ . '/bootstrap-local.php');
