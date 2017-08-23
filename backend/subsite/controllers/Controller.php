<?php

namespace backend\subsite\controllers;

use backend\components\AdminController;

abstract class Controller extends AdminController
{
    public function getViewPrefix()
    {
        return "@backend/subsite/views/{$this->id}/";
    }
}
