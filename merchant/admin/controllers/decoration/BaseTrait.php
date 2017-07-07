<?php

namespace merchant\admin\controllers\decoration;

use merchant\admin\controllers\BaseTrait as BaseTraitBase;

trait BaseTrait
{
    use BaseTraitBase;

    public function getViewPrefix()
    {
        return "@backend/subsite/views/{$this->id}/";
    }
}
