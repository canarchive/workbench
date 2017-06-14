<?php
namespace merchant\controllers;

use merchant\components\Controller;
use baseapp\auth\controllers\ApiTrait;
use merchant\models\Api;

class ApiController extends Controller
{
	use ApiTrait;

	public function getModel()
	{
        return new Api();
    }
}
