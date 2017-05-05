<?php

namespace spread\controllers;

use common\components\UploadController;
use spread\models\Attachment;

class SpreadUploadController extends UploadController
{
    public $enableCsrfValidation = false;

    protected function getAttachment($params = [])
    {
        return new Attachment($params);
    }
}
