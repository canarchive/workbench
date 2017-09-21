<?php

namespace backend\controllers;

use backend\components\AdminController;

abstract class Controller extends AdminController
{
    public function getViewPrefix()
    {
        return "@backend/views/charisma/{$this->id}/";
    }

}
