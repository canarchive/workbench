<?php

namespace backend\spread\controllers;

use backend\components\AdminController;

abstract class Controller extends AdminController
{
    public function getViewPrefix()
    {
        return "@backend/spread/views/{$this->id}/";
    }

}
