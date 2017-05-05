<?php

namespace backend\spread\controllers\decoration;

use backend\spread\controllers\User;

class UserController extends User
{
    protected $modelClass = 'spread\decoration\models\User';
    protected $modelSearchClass = 'spread\decoration\models\searchs\User';
}
