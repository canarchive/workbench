<?php

namespace spider\controllers;

use Yii;
use spider\components\Controller;
use spider\models\Dispatch;

class SpiderController extends Controller
{
    public function actionSpider()
    {
        $dispatch = $this->getDispatch();
        $action = Yii::$app->request->get('action');
        $dispatch->spider($action);
    }

    public function actionDeal()
    {
        $dispatch = $this->getDispatch();
        $action = Yii::$app->request->get('action');
        $dispatch->deal($action);
    }

    public function actionFileDown()
    {
        $dispatch = $this->getDispatch();
        $dispatch->fileDown();
    }

    protected function getDispatch()
    {
        $this->_checkCode();
        $dispatch = new Dispatch();
        $dispatch->code = $this->code;
        return $dispatch;
    }
}
