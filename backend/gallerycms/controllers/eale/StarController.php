<?php

namespace backend\gallerycms\controllers\eale;

use backend\components\AdminController;
use backend\components\ControllerTraitFull;

class StarController extends AdminController
{
    use ControllerTraitFull;
	protected $modelClass = 'gallerycms\eale\models\Star';
    protected $modelSearchClass = 'gallerycms\eale\models\searchs\Star';

}
