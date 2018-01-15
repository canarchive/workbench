<?php

namespace gallerycms\controllers;

use Yii;
use common\components\UploadController as UploadControllerBase;

class UploadController extends UploadControllerBase
{
    public $enableCsrfValidation = false;


    protected function getAttachment($params = [])
    {
        $mparam = Yii::$app->request->get('mparam', '');
        $class = "\gallerycms\\{$mparam}\models\Attachment";
        $model = new $class($params);
        return $model;
    }
}
