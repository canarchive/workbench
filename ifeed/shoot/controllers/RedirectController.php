<?php

namespace ifeed\shoot\controllers;

use Yii;
use yii\web\NotFoundHttpException;
use ifeed\shoot\models\Infotmp;
use ifeed\shoot\models\Categorytmp;
use ifeed\shoot\models\Sample;

class RedirectController extends Controller
{
	public function init()
	{
		parent::init();
	}
    public function actionShow()
    {
		$model = new Infotmp();
		$sort = Yii::$app->request->get('sort');
		$id = intval(Yii::$app->request->get('id'));
		$param = ['where' => ['source_code' => $sort, 'source_id' => $id]];
		$info = $model->getInfo($param);
        if (empty($info)) {
            throw new NotFoundHttpException('NO found');
        }
        $url = Yii::getAlias('@infotmp.ifeedurl') . '/ishow_' . $info['id'] . '.html';
        return Yii::$app->response->redirect($url, 301)->send();
    }

    public function actionList()
    {
		$sort = Yii::$app->request->get('sort');
		$id = intval(Yii::$app->request->get('cate'));
		$bigs = ['ch' => 'yssh', '0223' => 'syzp', 'sy' => 'rtys'];
		if (!in_array($sort, array_keys($bigs))) {
			echo $sort;exit();
            throw new NotFoundHttpException('NO found');
		}

		if (empty($id)) {
            $url = Yii::getAlias('@infotmp.ifeedurl') . '/' . $bigs[$sort] . '/';
            return Yii::$app->response->redirect($url, 301)->send();
		}

		$model = new Categorytmp();
		$param = ['where' => ['type_code' => $sort, 'source_id' => $id]];
		$info = $model->getInfo($param);
        if (empty($info)) {
			echo $sort;exit();
            throw new NotFoundHttpException('NO found');
        }
        $url = Yii::getAlias('@infotmp.ifeedurl') . '/' . $info['code'] . '/';
        return Yii::$app->response->redirect($url, 301)->send();
    }

	public function actionSample()
	{
		$model = new Sample();
		$id = intval(Yii::$app->request->get('id'));
		$param = ['where' => ['site_code' => 'shouxi', 'source_id' => $id]];
		$info = $model->getInfo($param);
        if (empty($info)) {
            throw new NotFoundHttpException('NO found');
        }
        $url = "http://sjshouxi.hulianyingxiang.cn/caseshow_{$info['id']}.html";
        return Yii::$app->response->redirect($url, 301)->send();
	}
}
