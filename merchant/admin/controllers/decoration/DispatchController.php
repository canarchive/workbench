<?php

namespace merchant\admin\controllers\decoration;

use Yii;
use backend\subsite\controllers\decoration\DispatchController as DispatchControllerBase;

class DispatchController extends DispatchControllerBase
{
    use BaseTrait;
    public $limitSearch = true;

    protected function privGetIgnore()
    {
        $role = Yii::$app->params['managerInfo']->role;
        if ($role == 'admin-inner') {
			return ['merchant_id', 'service_id'];
        }
		return ['merchant_id'];
    }
}
