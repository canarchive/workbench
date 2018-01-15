<?php

namespace backend\gallerycms\controllers\shoot;

use Yii;
use backend\components\AdminController;
use backend\components\ControllerTraitFull;

class SiteController extends AdminController
{
    use ControllerTraitFull;
	protected $modelClass = 'gallerycms\shoot\models\Site';
    protected $modelSearchClass = 'gallerycms\shoot\models\searchs\Site';

}
