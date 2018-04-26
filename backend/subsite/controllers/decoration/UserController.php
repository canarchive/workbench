<?php

namespace backend\subsite\controllers\decoration;

use baseapp\spread\controllers\UserTrait;

class UserController extends Controller
{
    use UserTrait;

    protected $modelClass = 'subsite\decoration\models\User';
    protected $modelSearchClass = 'subsite\decoration\models\searchs\User';

    public function getTableInfos()
    {
        //$tables = ['user_house', 'callback'];
        $tables = ['user', 'house', 'callback', 'user_merchant'];
        return $tables;
    }

    protected function _userInfoExts($model)
	{
        $houseInfos = $model->_newModel('house')->findAll(['mobile' => $model->mobile]);
		return ['houseInfos' => $houseInfos];
	}

    protected function _houseOperation($userModel, $operationType, $params)
    {
        $model = $userModel->_newModel('house', true);
        if ($operationType == 'update') {
            return $this->_update($model, $params);
        }

        $fields = ['mobile', 'service_id', 'region', 'address', 'house_area', 'house_sort', 'house_type', 'renovation_budget'];
        $this->_initFields($model, $fields);
        $r = $model->insert(false);

        $return = [
            'status' => 200,
            'message' => 'OK',
            'id' => $model->id,
            'created_at' => date('Y-m-m H:i:s', $model->created_at),
            'content' => $this->renderPartial($this->viewPrefix . '_user_house', ['model' => $model]),
        ];
        return $return;
    }

    protected function getListinfoView()
    {
        return '@backend/subsite/views/decoration/user/listinfo';
    }

	public function getMerchantWhere()
	{
		return ['status' => 'cpa'];
	}

	public function isMerchantEntrance()
	{
		return false;
	}
}
