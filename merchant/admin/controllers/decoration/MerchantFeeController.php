<?php

namespace merchant\admin\controllers\decoration;

use Yii;
use backend\subsite\controllers\decoration\MerchantFeeController as MerchantFeeControllerBase;

class MerchantFeeController extends MerchantFeeControllerBase
{
    public $limitSearch = true;
    use BaseTrait;

    protected function privGetIgnore()
    {
        $role = Yii::$app->params['managerInfo']->role;
        if ($role == 'admin-inner' || $role == 'saleman-chief') {
			$_GET['status'] = [1];
            $this->limitSearch = false;
        }
        return $this->strictPriv ? [] : ['merchant_id', 'service_id'];
    }
}
