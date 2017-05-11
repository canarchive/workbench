<?php

namespace backend\saccount\controllers;

use Yii;
use yii\helpers\ArrayHelper;
use backend\components\AdminController;
use spread\models\saccount\Spreadurl;

class SpreadurlController extends AdminController
{

    public function actionListinfo()
    {
        $model = new Spreadurl();
        $cityCode = Yii::$app->request->get('city_code');
        $params = [
            'showFull' => Yii::$app->request->get('show_full', ''),
            'cityCode' => empty($cityCode) ? 'beijing' : $cityCode,
            'merchantId' => Yii::$app->request->get('merchant_id', 2),
            'domainCode' => Yii::$app->request->get('domain_code'),
            'templateCode' => Yii::$app->request->get('template'),
            'channel' => Yii::$app->request->get('channel'),
            'attrs' => $this->dealParams($model->attributeParams),
        ];
        $model->inputParams = $params;
        $datas = $model->createDatas();
        $datas['attrs'] = $params['attrs'];

        return $this->render('/spreadurl/listinfo', $datas);
    }

    public function dealParams($attrs)
    {
        $datas = [];
        foreach ($attrs as $attr => $aInfo) {
            $aInfo['default'] = Yii::$app->request->get($attr, $aInfo['default']);
            $datas[$attr] = $aInfo;
        }
        return $datas;
    }
}
