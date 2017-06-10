<?php

namespace backend\subsite\controllers;

use Yii;
use yii\web\ForbiddenHttpException;
use backend\components\AdminController;

class User extends AdminController
{
    use UserTrait;
}
