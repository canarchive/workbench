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
		//$managerInfo['id'] = $managerInfo['id'] == 1 ? 42 : $managerInfo['id'];

        $serviceRoles = ['service', 'service-admin', 'admin', 'service-inner', 'service-admin-inner', 'admin-inner', 'service-saleman'];
        if (in_array($role, $serviceRoles)) {
            $model = new Service();
            $whereBase = ['merchant_id' => $merchantIds];
            switch ($role) {
            case 'service':
            case 'service-inner':
                $where = ['and', ['user_id' => $managerInfo['id']], $whereBase];
                break;
            case 'service-admin':
            case 'service-admin-inner':
			case 'service-saleman':
                $where = ['or', ['user_id' => $managerInfo['id']], ['manager_id' => $managerInfo['id']]];
                $where = ['and', $where ,$whereBase];
                break;
            case 'admin':
            case 'admin-inner':
                $where = $whereBase;
                break;
            }
            //var_dump($where);exit();
            $serviceInfos = $model->find()->where($where)->indexBy('id')->all();
            $serviceIds = array_keys($serviceInfos);
            //var_dump($serviceIds);exit();
			if ($role != 'admin') {
                $data['service_id'] = empty($serviceIds) ? ['no'] : $serviceIds;
			}
        }

        return $data;
    }
}
