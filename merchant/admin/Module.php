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
		//$this->layout = '//main';
        /*$this->modules = [
            'admin' => [
                'class' => 'merchant\decoration\admin\Module',
            ],
        ];*/
    }

    public function initPrivInfo()
    {
        $managerInfo = Yii::$app->params['managerInfo'];
        $role = $managerInfo['role'];
        $merchantIds = array_filter(explode(',', $managerInfo['merchant_id']));
        $data = [
            'merchant_id' => $merchantIds,
        ];

        $serviceRoles = ['service', 'service-admin', 'admin'];
        if (in_array($role, $serviceRoles)) {
            $model = new Service();
            $whereBase = ['merchant_id' => $merchantIds];
            switch ($role) {
            case 'service':
                $where = ['and', ['user_id' => $managerInfo['id']], $whereBase];
                break;
            case 'service-admin':
                $where = ['or', ['user_id' => $managerInfo['id']], ['manager_id' => $managerInfo['id']]];
                $where = ['and', $where ,$whereBase];
                break;
            case 'admin':
                $where = $whereBase;
                break;
            }
            var_dump($where);exit();
            $serviceInfos = $model->find()->where($where)->indexBy('id')->all();
            $serviceIds = array_keys($serviceInfos);
            var_dump($serviceIds);exit();
            $_GET['service_id'] = $serviceIds;
            $data['service_id'] = $serviceIds;
        }

        $_GET['merchant_id'] = $merchantIds;
        return $data;
    }
}
