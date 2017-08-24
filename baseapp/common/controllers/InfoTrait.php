<?php

namespace baseapp\common\controllers;

use backend\components\ControllerTraitFull;

trait InfoTrait
{
    use ControllerTraitFull;

	public function getViewPrefix()
	{
        return '@baseapp/common/views/info/';
    }
}
