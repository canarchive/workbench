<?php

namespace backend\gallerycms\controllers\sinfo;

use Yii;
use backend\components\AdminController;
use backend\components\ControllerFullTrait;

class InfoController extends AdminController
{
    
    use ControllerFullTrait;
	protected $modelClass = 'gallerycms\sinfo\models\Info';
    protected $modelSearchClass = 'gallerycms\sinfo\models\searchs\Info';

}
