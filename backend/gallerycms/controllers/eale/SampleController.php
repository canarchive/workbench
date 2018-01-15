<?php

namespace backend\gallerycms\controllers\eale;

use Yii;
use backend\components\AdminController;
use backend\components\ControllerTraitFull;

class SampleController extends AdminController
{
    public $showSubnav = false;
    public $sort;
    
    use ControllerTraitFull;
	protected $modelClass = 'gallerycms\eale\models\Sample';
    protected $modelSearchClass = 'gallerycms\eale\models\searchs\Sample';

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
