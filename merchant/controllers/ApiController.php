<?php
namespace merchant\controllers;

use baseapp\auth\controllers\ApiTrait;
use merchant\models\Api;

class ApiController extends Controller
{
	use ApiTrait;

	public function getModel()
	{
        return new Api();
    }

    public function actionRegister()
    {
		$fields = ['mobile', 'code', 'password', 'email', 'merchant_name', 'name', 'merchant_sort'];
		$data = $this->_formatInput($fields);

        $model = $this->getModel();
		return $model->register($data);
	}
}
