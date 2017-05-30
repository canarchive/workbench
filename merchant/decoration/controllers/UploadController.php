<?php

namespace shop\controllers;

use common\components\UploadController AS UploadControllerBase;

class UploadController extends UploadControllerBase
{
	public $enableCsrfValidation = false;

	protected function getAttachment($params = [])
	{
		if ($params['info_table'] == 'sample') {
			return new \shop\models\AttachmentSample($params);
		}
		return new Attachment($params);
	}
}
