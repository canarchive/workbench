<?php

namespace spread\shoot;

use Yii;

class Module extends \yii\base\Module
{
    public function init()
    {
        parent::init();
        Yii::$app->params['spreadModule'] = 'shoot';
    }
}
