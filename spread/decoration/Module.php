<?php

namespace spread\decoration;

use Yii;
use common\components\ModuleBase;

class Module extends ModuleBase
{
    public function init()
    {
        parent::init();
        Yii::$app->params['spreadModule'] = 'decoration';
		Yii::$app->params['currentCompany'] = $this->getCurrentCompany();
    }
}
