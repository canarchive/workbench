<?php

namespace backend\gallerycms\controllers\house;

use backend\components\AdminController;
use backend\components\ControllerFullTrait;

class CommunityController extends AdminController
{
    use ControllerFullTrait;
	protected $modelClass = 'gallerycms\house\models\Community';
    protected $modelSearchClass = 'gallerycms\house\models\searchs\Community';

}

