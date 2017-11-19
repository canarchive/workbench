<?php

namespace ifeed\shoot\controllers;

use Yii;
use yii\web\NotFoundHttpException;
use ifeed\shoot\models\Infotmp;
use ifeed\shoot\models\Categorytmp;

class RedirectController extends Controller
{
    public function actionShow()
    {
		$model = new Infotmp();
		$sort = Yii::$app->request->get('sort');
		$id = intval(Yii::$app->request->get('id'));
		$param = ['where' => ['source_code' => $sort, 'source_id' => $id]];
		var_dump($param);
		$info = $model->getInfo($param);
        if (empty($info)) {
            throw new NotFoundHttpException('NO found');
        }
        $url = Yii::getAlias('@infotmp.ifeedurl') . '/ishow_' . $info['id'] . '.html';
        return Yii::$app->response->redirect($url, 301)->send();
    }
}
