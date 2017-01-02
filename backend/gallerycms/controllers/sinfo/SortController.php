<?php

namespace backend\gallerycms\controllers\sinfo;

use Yii;
use backend\components\AdminController;
use backend\components\ControllerFullTrait;

class SortController extends AdminController
{
    use ControllerFullTrait;
	protected $modelClass = 'gallerycms\sinfo\models\Sort';
    protected $modelSearchClass = 'gallerycms\sinfo\models\searchs\Sort';

}
