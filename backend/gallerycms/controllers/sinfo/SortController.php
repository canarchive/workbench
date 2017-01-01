<?php

namespace backend\gallerycms\controllers\sinfo;

use Yii;
use backend\components\AdminController;
use backend\components\ControllerFullTrait;

class InfoController extends AdminController
{
    public $showSubnav = false;
    public $sort;
    
    use ControllerFullTrait;
	protected $modelClass = 'gallerycms\sinfo\models\Info';
    protected $modelSearchClass = 'gallerycms\sinfo\models\searchs\Info';

    public function init()
    {
        parent::init();

        $this->sort = Yii::$app->request->get('sort');
    }

    protected function _addData()
    {
        return ['sort' => $this->sort];
    }
}
