<?php

namespace merchant\admin\controllers\decoration;

trait BaseTrait
{
    public function getViewPrefix()
    {
        return "@backend/subsite/views/{$this->id}/";
    }
}
