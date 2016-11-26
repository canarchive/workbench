<?php

namespace gallerycms\cmsad\controllers;

use common\components\UploadController;
use gallerycms\cmsad\models\Attachment;

class GallerycmsUploadController extends UploadController
{
    public $enableCsrfValidation = false;

    protected function getAttachment($params = [])
    {
        return new Attachment($params);
    }
}
