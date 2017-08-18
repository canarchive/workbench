<?php

namespace backend\merchant\controllers;

use backend\components\AdminController;

abstract class Controller extends AdminController
{
    public function getViewPrefix()
    {
        return "@backend/merchant/views/{$this->id}/";
    }

}
