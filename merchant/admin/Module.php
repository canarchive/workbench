<?php

namespace merchant\admin;

use Yii;
use common\components\ModuleBase;
use baseapp\merchant\models\Service;
use merchant\models\Saleman;

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
        $model = new Saleman();
        Yii::$app->params['salemanInfo'] = $salemanInfo = $model->find()->where(['user_id' => $managerInfo['id']])->one();

        $role = $managerInfo['role'];
        $merchantIds = array_filter(explode(',', $managerInfo['merchant_id']));
        if (in_array($role, ['service-saleman', 'saleman-chief'])) {
			//$merchantIds = null;
            //$this->initSalemanPriv($managerInfo, $salemanInfo);
        }
        return [
            'merchant_id' => $merchantIds,
            'service_id' => $this->_getServicePriv($role, $managerInfo, $merchantIds),
        ];
    }

    protected function initSalemanPriv($managerInfo, $salemanInfo)
    {
        if (empty($salemanInfo)) {
            return ;
        }
        if ($managerInfo['role'] == 'service-saleman') {
            $_GET['saleman_id'] = $salemanInfo['id'];
        }
    }

    protected function _getServicePriv($role, $managerInfo, $merchantIds)
    {
        if (!in_array($role, ['admin-inner', 'saleman-chief'])) {
            Yii::$app->params['noSearchServer'] = true;
            //return null;
        }
        if (in_array($role, ['admin-cpa', 'admin', 'admin-inner', 'service-saleman', 'cpa-cps', 'saleman-chief'])) {
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
        $serviceIds = empty($serviceIds) ? ['no'] : $serviceIds;
        return $serviceIds;
    }
}
