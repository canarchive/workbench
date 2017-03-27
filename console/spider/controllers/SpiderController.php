<?php

namespace console\spider\controllers;

use Yii;
use yii\console\Controller;
use spider\models\Dispatch;

class SpiderController extends Controller
{
    public function actionSpider($code, $action)
    {
        $dispatch = $this->getDispatch($code);
        $dispatch->spider($action);
    }

    public function actionDeal($siteId, $action)
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

    protected function getDispatch($code)
    {
        $code = $code;
        $codes = require(Yii::getAlias('@spider') . '/config/params-code.php');
        if (!in_array($code, array_keys($codes))) {
            exit('code error');
        }
        $dispatch = new Dispatch();
        $dispatch->code = $code;
        return $dispatch;
    }
}
