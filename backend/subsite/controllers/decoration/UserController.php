<?php

namespace backend\subsite\controllers\decoration;

use backend\components\AdminController;
use baseapp\spread\controllers\UserTrait;

class UserController extends AdminController
{
    use UserTrait;

    protected $modelClass = 'subsite\decoration\models\User';
    protected $modelSearchClass = 'subsite\decoration\models\searchs\User';

    public function getTableInfos()
    {
        //$tables = ['user_house', 'callback'];
        $tables = ['user', 'house', 'callback', 'user_merchant'];
    }

    protected function _userInfoExts($model)
	{
        $houseInfos = $model->_newModel('house')->findAll(['mobile' => $model->mobile]);
		return ['houseInfos' => $houseInfos];
	}

    protected function _houseOperation($userModel, $operationType, $params = [])
    {
            $fields = ['mobile', 'service_id', 'region', 'address', 'house_area', 'house_sort', 'house_type', 'renovation_budget'];
            $model = $userModel->_newModel('house', true);
            $model->insert(false);
    }
}
