<?php

namespace merchant\controllers;

use common\components\UploadController as UploadControllerBase;
use merchant\models\Attachment;

class UploadController extends UploadControllerBase
{
    public $enableCsrfValidation = false;

    protected function getAttachment($params = [])
    {
        return new Attachment($params);
    }
}
