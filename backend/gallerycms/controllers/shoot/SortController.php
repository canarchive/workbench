<?php

namespace backend\gallerycms\controllers\shoot;

use Yii;
use backend\components\AdminController;
use backend\components\ControllerTraitFull;

class SortController extends AdminController
{
    use ControllerTraitFull;
	protected $modelClass = 'gallerycms\shoot\models\Sort';
    protected $modelSearchClass = 'gallerycms\shoot\models\searchs\Sort';

}
