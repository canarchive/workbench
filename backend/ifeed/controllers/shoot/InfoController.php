<?php

namespace backend\ifeed\controllers\shoot;

use Yii;
use backend\components\AdminController;
use backend\components\ControllerTraitFull;

class InfoController extends AdminController
{
    
    use ControllerTraitFull;
	protected $modelClass = 'ifeed\shoot\models\Info';
    protected $modelSearchClass = 'ifeed\shoot\models\searchs\Info';

}
