<?php
namespace backend\controllers;

use Yii;
use yii\filters\AccessControl;
use backend\models\Signin;
use backend\components\AdminController;
use baseapp\auth\controllers\EntranceTrait;

class EntranceController extends AdminController
{
	use EntranceTrait;

	public $layout = false;


	public function getModel($sort)
	{
		return new Signin();
	}
}
