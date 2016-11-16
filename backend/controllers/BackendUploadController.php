<?php

namespace backend\controllers;

use common\components\UploadController;
use common\models\AttachmentCommon;

class BackendUploadController extends UploadController
{
	public $enableCsrfValidation = false;
    public $moduleId;
    public $actionId;
    public $actionIdBase;

	protected function getAttachment($params = [])
	{
		return new AttachmentCommon($params);
	}
}
