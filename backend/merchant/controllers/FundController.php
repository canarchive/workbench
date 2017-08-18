<?php

namespace backend\merchant\controllers;

use backend\components\ControllerTraitFull;

class FundController extends Controller
{
    use ControllerTraitFull;
    protected $modelClass = 'merchant\models\Fund';
    protected $modelSearchClass = 'merchant\models\searchs\Fund';
}
