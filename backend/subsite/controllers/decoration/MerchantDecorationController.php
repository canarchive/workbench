<?php

namespace backend\subsite\controllers\decoration;

use backend\components\ControllerTraitFull;

class MerchantDecorationController extends Controller
{
    use ControllerTraitFull;
    protected $modelClass = 'subsite\decoration\models\MerchantDecoration';
    protected $modelSearchClass = 'subsite\decoration\models\searchs\MerchantDecoration';
}
