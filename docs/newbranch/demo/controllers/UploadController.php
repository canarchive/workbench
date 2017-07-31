<?php

namespace demo\controllers;

use common\components\UploadController as UploadControllerBase;
use demo\models\Attachment;

class UploadController extends UploadControllerBase
{
    public $enableCsrfValidation = false;

    protected function getAttachment($params = [])
    {
        return new Attachment($params);
    }
}
