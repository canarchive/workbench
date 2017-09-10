<?php

namespace backend\ifeed\controllers\shoot;

use backend\components\AdminController;

abstract class Controller extends AdminController
{
    public function getViewPrefix()
    {
        return "@backend/ifeed/views/{$this->id}/";
    }
}
