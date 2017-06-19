<?php

namespace merchant\admin;

use Yii;
use common\components\ModuleBase;

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
        $merchantIds = array_filter(explode(',', $managerInfo['merchant_id']));
        $data = [
            'app' => 'merchant',
            'role' => $managerInfo['role'],
            'merchant_id' => $merchantIds,
            'privFields' => [
                'merchant_id' => $merchantIds,
            ],
        ];
        $_GET['merchant_id'] = $data['merchant_id'];
        return $data;
    }
}
