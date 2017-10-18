<?php

namespace merchant\admin\controllers;

use Yii;

trait BaseTrait
{
    public function getViewPrefix()
    {
        return "@backend/merchant/views/{$this->id}/";
    }

    public function getStrictPriv()
    {
        $role = Yii::$app->params['managerInfo']->role;
        if (in_array($role, ['admin-inner', 'service-inner', 'service-admin-inner', 'service-saleman', 'saleman-chief'])) {
            return false;
        }
        return true;
    }
}
