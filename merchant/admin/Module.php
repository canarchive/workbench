<?php

namespace merchant\admin;

use Yii;
use common\components\ModuleBase;

class Module extends ModuleBase
{
    public function init()
    {
        parent::init();

		Yii::configure($this, require(__DIR__ . '/config/main.php'));
		//$this->layout = '//main';
        /*$this->modules = [
            'admin' => [
                'class' => 'merchant\decoration\admin\Module',
            ],
        ];*/
    }
}
