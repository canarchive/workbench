<?php

namespace merchant\admin\controllers\statistic;

use merchant\admin\controllers\BaseTrait as BaseTraitBase;

trait BaseTrait
{
    use BaseTraitBase;

    public function getViewPrefix()
    {
        return "@backend/statistic/views/";
    }
}
