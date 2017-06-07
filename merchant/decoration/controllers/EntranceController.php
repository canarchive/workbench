<?php
namespace merchant\decoration\controllers;

use merchant\models\SigninForm;
use merchant\components\AdminController;
use merchant\controllers\TraitEntrance;

class EntranceController extends AdminController
{
	use TraitEntrance;

    public function init()
    {
		parent::init();
		$this->layout = false;
    }
}
