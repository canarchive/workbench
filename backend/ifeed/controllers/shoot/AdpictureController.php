<?php

namespace backend\ifeed\controllers\shoot;

use baseapp\ifeed\controllers\AdpictureTrait;

class AdpictureController extends Controller
{
    use AdpictureTrait;
    protected $modelClass = 'ifeed\shoot\models\Adpicture';
    protected $modelSearchClass = 'ifeed\shoot\models\searchs\Adpicture';
}
