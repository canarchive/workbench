<?php

namespace baseapp\common\controllers;

use backend\components\ControllerTraitFull;

trait CategoryTrait
{
    use ControllerTraitFull;

	public function getViewPrefix()
	{
        return '@baseapp/common/views/category/';
	}
}
