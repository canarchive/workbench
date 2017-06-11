<?php

namespace baseapp\behaviors;

use yii\base\Behavior;
use yii\helpers\ArrayHelper;
use baseapp\merchant\models\Service;

class ServiceBehavior extends Behavior
{
    public function getServiceInfos()
    {
        $infos = $this->getServiceModel()->find()->indexBy('id')->all();
        return $infos;
    }

    protected function getServiceInfo()
    {
        if (!isset($this->service_id) || empty($this->service_id)) {
            return [];
        }

        $info = $this->getServiceModel()->findOne($this->service_id);
        return $info;
    }

    protected function getServiceModel($forceNew = false)
    {
        static $model;
        if (is_null($model) || $forceNew) {
            $model = new Service();
        }

        return $model;
    }
}
