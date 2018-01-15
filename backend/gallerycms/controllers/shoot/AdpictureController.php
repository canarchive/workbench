<?php

namespace backend\gallerycms\controllers\shoot;

use Yii;
use backend\components\AdminController;
use backend\components\ControllerTraitFull;

class AdpictureController extends AdminController
{
    use ControllerTraitFull;
	protected $modelClass = 'gallerycms\shoot\models\Adpicture';
    protected $modelSearchClass = 'gallerycms\shoot\models\searchs\Adpicture';

}
