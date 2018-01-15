<?php

namespace backend\gallerycms\controllers\shoot;

use Yii;
use backend\components\AdminController;
use backend\components\ControllerTraitFull;

class InfoController extends AdminController
{
    
    use ControllerTraitFull;
	protected $modelClass = 'gallerycms\shoot\models\Info';
    protected $modelSearchClass = 'gallerycms\shoot\models\searchs\Info';

}
