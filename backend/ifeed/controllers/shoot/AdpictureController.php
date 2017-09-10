<?php

namespace backend\ifeed\controllers\shoot;

use backend\components\ControllerTraitFull;

class AdpictureController extends Controller
{
    use ControllerTraitFull;
	protected $modelClass = 'ifeed\shoot\models\Adpicture';
    protected $modelSearchClass = 'ifeed\shoot\models\searchs\Adpicture';

}
