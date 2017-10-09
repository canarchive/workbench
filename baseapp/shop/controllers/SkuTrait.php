<?php

namespace baseapp\shop\controllers;

use backend\components\ControllerTraitFull;

trait SkuTrait
{
    use ControllerTraitFull;

	public function getViewPrefix()
	{
        return '@baseapp/shop/views/sku/';
    }
}
