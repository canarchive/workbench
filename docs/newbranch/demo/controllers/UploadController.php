<?php

namespace demo\controllers;

use common\components\UploadController;
use demo\models\Attachment;

class UploadController extends UploadController
{
    public $enableCsrfValidation = false;

    protected function getAttachment($params = [])
    {
        return new Attachment($params);
    }
}
