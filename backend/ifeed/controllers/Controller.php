<?php

namespace backend\ifeed\controllers;

use backend\components\AdminController;

abstract class Controller extends AdminController
{
    public function getViewPrefix()
    {
        return "@backend/ifeed/views/{$this->id}/";
    }

}
