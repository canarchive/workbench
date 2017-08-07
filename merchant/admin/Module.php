<?php

namespace merchant\admin;

use Yii;
use common\components\ModuleBase;
use baseapp\merchant\models\Service;

class Module extends ModuleBase
{
    public function init()
    {
        parent::init();
        $this->layout = 'main';

		Yii::configure($this, require(__DIR__ . '/config/main.php'));
    }

    public function initPrivInfo()
    {
        $managerInfo = Yii::$app->params['managerInfo'];
        $role = $managerInfo['role'];
        $merchantIds = array_filter(explode(',', $managerInfo['merchant_id']));
        return [
            'merchant_id' => $merchantIds,
            'service_id' => $this->_getServicePriv($role, $managerInfo, $merchantIds),
        ];
    }

    protected function _getServicePriv($role, $managerInfo, $merchantIds)
    {
        if (!in_array($role, ['admin-inner'])) {
            Yii::$app->params['noSearchServer'] = true;
            return null;
        }
        if (in_array($role, ['admin-cpa', 'admin', 'admin-inner'])) {
            return null;
        }

        $model = new Service();
        $whereBase = ['merchant_id' => $merchantIds];
        if (in_array($role, ['service', 'service-inner'])) {
            $where = ['and', ['user_id' => $managerInfo['id']], $whereBase];
        } else if (in_array($role, ['service-admin', 'service-admin-inner'])) {
            $where = ['or', ['user_id' => $managerInfo['id']], ['manager_id' => $managerInfo['id']]];
            $where = ['and', $where ,$whereBase];
        } else {
            $where = $whereBase;
        }
        $serviceInfos = $model->find()->where($where)->indexBy('id')->all();
        $serviceIds = array_keys($serviceInfos);
        $serviceId = empty($serviceIds) ? ['no'] : $serviceIds;
        return $serviceIds;
    }
}
