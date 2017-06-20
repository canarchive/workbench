<?php

namespace backend\controllers;

use Yii;
use yii\web\Response;
use yii\helpers\ArrayHelper;
use backend\components\AdminController;
use backend\components\ControllerFullTrait;

class RegionController extends AdminController
{
    use ControllerFullTrait;
    public $modelClass = 'common\models\region\Region';
    public $modelSearchClass = 'common\models\region\searchs\Region';

    public function actionListinfo()
    {
        $action = Yii::$app->request->get('action');
        if (in_array($action, array('subInfos'))) {
            $data = $this->$action();
            return $data;
        }

        return $this->_listinfoInfo();
    }

    protected function subInfos()
    {
        Yii::$app->response->format = Response::FORMAT_JSON;

        $parentCode = Yii::$app->request->get('parent_code');
        $modelClass = $this->modelClass;
        $model = new $modelClass();
        $infos = $model->getSubInfos($parentCode);
        $isDirect = $model->isDirect($parentCode);
        $datas = [];
        if ($isDirect) {
            foreach ($infos as $info) {
                $subDatas = (array) $model->getSubInfos($info['code']);
                $datas = array_merge($datas, $subDatas);
            }
        } else {
            $datas = $infos;
        }

        $datas = ArrayHelper::map($datas, 'code', 'name');
        //print_r($datas);
        return $datas;
    }

    public function _addData()
    {
        return [
            'parent_code' => Yii::$app->request->get('parent_code'),
        ];
    }
}
