<?php

namespace merchant\admin\controllers\merchant;

use merchant\admin\controllers\BaseTrait as BaseTraitBase;

trait BaseTrait
{
    use BaseTraitBase;

    public function getViewPrefix()
    {
        $controllerId = basename($this->id);
        return "@backend/merchant/views/{$controllerId}/";
    }
}
