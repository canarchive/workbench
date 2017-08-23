<?php

namespace baseapp\common\controllers;

use backend\components\AdminController;
use backend\components\ControllerTraitFull;

trait SortTrait
{
    use ControllerTraitFull;

	public function getViewPrefix()
	{
        return '@baseapp/common/views/sort/';
    }
}
