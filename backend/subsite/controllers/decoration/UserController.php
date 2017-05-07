<?php

namespace backend\subsite\controllers\decoration;

use backend\subsite\controllers\User;

class UserController extends User
{
    protected $modelClass = 'subsite\decoration\models\User';
    protected $modelSearchClass = 'subsite\decoration\models\searchs\User';
}
