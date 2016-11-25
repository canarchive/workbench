<?php

namespace gallerycms\models;

use Yii;

trait CmsadTrait
{
    public static function getDb()
    {
        return Yii::$app->dbGallerycms;
    }    

    public function _newModel($code, $returnNew = false, $data = [])
    {
        static $models = [];
        $code = ucfirst($code);
        if (!isset($models[$code]) || $returnNew) {
            $class = "\gallerycms\cmsad\models\\{$code}";
            $models[$code] = new $class($data);
        }
        return $models[$code];
    }
}
