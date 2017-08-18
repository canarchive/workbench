<?php

namespace backend\merchant\controllers;

use backend\components\ControllerTraitFull;

class SalemanController extends Controller
{
    use ControllerTraitFull;
    protected $modelClass = 'merchant\models\Saleman';
    protected $modelSearchClass = 'merchant\models\searchs\Saleman';

}
