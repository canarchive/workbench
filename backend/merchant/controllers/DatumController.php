<?php

namespace backend\merchant\controllers;

use backend\components\ControllerTraitFull;

class DatumController extends Controller
{
    use ControllerTraitFull;
    protected $modelClass = 'merchant\models\Datum';
    protected $modelSearchClass = 'merchant\models\searchs\Datum';

}
