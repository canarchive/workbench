<?php

namespace gallerycms\house;

use Yii;
use gallerycms\components\ModuleBase;

class Module extends ModuleBase
{
    public function init()
    {
        parent::init();

        Yii::$app->params['currentCompany'] = $this->getCurrentCompany();
    }
}