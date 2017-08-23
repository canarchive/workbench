<?php

namespace baseapp\common\controllers;

use backend\components\ControllerTraitFull;

trait PositionTrait
{
    use ControllerTraitFull;

	public function getViewPrefix()
	{
        return '@baseapp/common/views/position/';
    }
}
