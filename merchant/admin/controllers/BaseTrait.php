<?php

namespace merchant\admin\controllers;

trait BaseTrait
{
    public function getViewPrefix()
    {
        return "@backend/merchant/views/{$this->id}/";
    }
}
