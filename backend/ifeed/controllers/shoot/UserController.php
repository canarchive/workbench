<?php

namespace backend\ifeed\controllers\shoot;

use backend\components\AdminController;
use baseapp\spread\controllers\UserTrait;

class UserController extends AdminController
{
    use UserTrait;

    protected $modelClass = 'ifeed\shoot\models\User';
    protected $modelSearchClass = 'ifeed\shoot\models\searchs\User';

    public function getTableInfos()
    {
        //$tables = ['user_house', 'callback'];
        $tables = ['user', 'house', 'callback', 'user_merchant'];
    }
}
