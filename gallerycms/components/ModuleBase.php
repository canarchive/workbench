<?php

namespace gallerycms\components;

use Yii;
use common\components\ModuleBase AS ModuleCommon;

class ModuleBase extends ModuleCommon
{
    public function init()
    {
        parent::init();

        Yii::$app->params['companyInfos'] = $this->getCompanyInfos();
    }
}
