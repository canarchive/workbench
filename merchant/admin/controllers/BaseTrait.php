<?php

namespace merchant\admin\controllers;

trait BaseTrait
{
    public function getViewPrefix()
    {
        return "@backend/merchant/views/{$this->id}/";
    }

    public function getStrictPriv()
    {
        $role = $this->managerInfo->role;
        if (in_array($role, ['admin-inner', 'service-inner', 'service-admin-inner'])) {
            return false;
        }
        return true;
    }
}
