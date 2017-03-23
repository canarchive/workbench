<?php

namespace console\gallerycms\controllers;

use Yii;
use yii\console\Controller;
use gallerycms\house\models\AskQuestion;
use gallerycms\house\models\Quote;

class UpdateController extends Controller
{
    public function actionUpdateAsk()
    {
        $data = $this->baseInfo('ask');

        if ($data['hit'] === 0) {
            $model = new AskQuestion();
            $model->updateInfo($data['num']);
        }
    }

    public function actionUpdateQuote()
    {
        $data = $this->baseInfo('quote');

        //if ($data['hit'] === 0) {
            $model = new Quote();
            $model->updateInfo($data['num']);
        //}
    }

    protected function baseInfo($sort)
    {
        $updateDatas = require(Yii::getAlias('@gallerycms') . '/config/update-datas.php');
        $uData = $updateDatas['ask'];
        $cTime = Yii::$app->params['currentTime'];
        $index = date('W', $cTime) - 11;
        $data = $uData[$index];
        
        $cMinute = $cTime - strtotime(date('Y-m-d', $cTime));
        $cMinute = floor($cMinute / 60);
        $hit = $cMinute % $data['minute'];
        return ['hit' => $hit, 'num' => $data['num']];
    }
}
