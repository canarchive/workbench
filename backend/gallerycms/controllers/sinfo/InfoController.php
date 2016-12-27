<?php

namespace backend\gallerycms\controllers\eale;

use Yii;
use backend\components\AdminController;
use backend\components\ControllerFullTrait;

class InfoController extends AdminController
{
    public $showSubnav = false;
    public $sort;
    
    use ControllerFullTrait;
	protected $modelClass = 'gallerycms\eale\models\Info';
    protected $modelSearchClass = 'gallerycms\eale\models\searchs\Info';

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
