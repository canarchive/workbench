<?php

namespace subsite\controllers;

use common\components\UploadController as UploadControllerBase;
use subsite\models\Attachment;

class UploadController extends UploadControllerBase
{
    public $enableCsrfValidation = false;

    protected function getAttachment($params = [])
    {
        return new Attachment($params);
    }
}
