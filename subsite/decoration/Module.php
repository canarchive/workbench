<?php

namespace subsite\decoration;

use Yii;
use common\components\ModuleBase;

class Module extends ModuleBase
{
    public function init()
    {
        parent::init();
        //Yii::$app->params['subsiteModule'] = 'decoration';
		Yii::$app->params['currentCompany'] = $this->getCurrentCompany();
    }
}
