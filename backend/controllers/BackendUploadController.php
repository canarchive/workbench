<?php

namespace backend\controllers;

use common\components\UploadController;
use common\models\AttachmentCommon;

class BackendUploadController extends UploadController
{
	public $enableCsrfValidation = false;

	protected function getAttachment($params = [])
	{
		return new AttachmentCommon($params);
	}
}
