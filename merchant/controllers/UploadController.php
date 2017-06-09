<?php

namespace merchant\controllers;

use common\components\UploadController;
use merchant\models\Attachment;

class UploadController extends UploadController
{
    public $enableCsrfValidation = false;

    protected function getAttachment($params = [])
    {
        return new Attachment($params);
    }
}
