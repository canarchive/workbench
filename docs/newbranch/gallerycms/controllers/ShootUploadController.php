<?php

namespace gallerycms\controllers;

use common\components\UploadController;
use gallerycms\models\Attachment;

class GallerycmsUploadController extends UploadController
{
    public $enableCsrfValidation = false;

    protected function getAttachment($params = [])
    {
        return new Attachment($params);
    }
}
