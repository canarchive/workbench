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
        if ($role == 'service' || $role == 'service-admin') {
            $model = new Service();
            $where = ['mobile' => $managerInfo['mobile']];
            if ($role == 'service-admin') {
                $where = ['or', ['manager_id' => $managerInfo['id']], $where];
            }
            $serviceInfos = $model->find()->where($where)->indexBy('id')->all();
            $serviceIds = array_keys($serviceInfos);
            $_GET['service_id'] = $serviceIds;
            $data['service_id'] = $serviceIds;
        }

        $_GET['merchant_id'] = $merchantIds;
        return $data;
    }
}
