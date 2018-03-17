<?php

namespace merchant\admin\controllers\merchant;

use backend\merchant\controllers\ContactController as ContactControllerBase;

class ContactController extends ContactControllerBase
{
    use BaseTrait;

    protected function privGetIgnore()
    {
		//return [];
        return ['merchant_id'];
    }

	public function actionListservice()
	{
		return $this->actionListinfo();
	}
}
