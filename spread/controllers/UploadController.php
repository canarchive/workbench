<?php

namespace spread\controllers;

use common\components\UploadController as UploadControllerBase;
use spread\models\Attachment;

class UploadController extends UploadControllerBase
{
    public $enableCsrfValidation = false;

    protected function getAttachment($params = [])
    {
        return new Attachment($params);
    }
}
