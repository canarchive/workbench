<?php

namespace backend\merchant\controllers;

use Yii;
use backend\components\AdminController;
use backend\components\ControllerTraitFull;

class DatumController extends AdminController
{
    use ControllerTraitFull;
    protected $modelClass = 'merchant\models\Datum';
    protected $modelSearchClass = 'merchant\models\searchs\Datum';

}
