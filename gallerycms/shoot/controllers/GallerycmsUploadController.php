<?php

namespace gallerycms\shoot\controllers;

use common\components\UploadController;
use gallerycms\shoot\models\Attachment;

class GallerycmsUploadController extends UploadController
{
    public $enableCsrfValidation = false;

    protected function getAttachment($params = [])
    {
        return new Attachment($params);
    }
}
