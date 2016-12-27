<?php

namespace gallerycms\eale\controllers;

use common\components\UploadController;
use gallerycms\eale\models\Attachment;

class GallerycmsUploadController extends UploadController
{
    public $enableCsrfValidation = false;

    protected function getAttachment($params = [])
    {
        return new Attachment($params);
    }
}
