<?php

namespace backend\gallerycms\controllers\shoot;

use backend\components\AdminController;
use baseapp\spread\controllers\UserTrait;

class UserController extends AdminController
{
    use UserTrait;

    protected $modelClass = 'gallerycms\shoot\models\User';
    protected $modelSearchClass = 'gallerycms\shoot\models\searchs\User';

    public function getTableInfos()
    {
        //$tables = ['user_house', 'callback'];
        $tables = ['user', 'house', 'callback', 'user_merchant'];
    }
}
