<?php

namespace gallerycms\house\controllers;

use Yii;
use yii\web\NotFoundHttpException;
use gallerycms\components\HouseController;
use gallerycms\merchant\models\Realcase;
use gallerycms\house\models\Sample;

class RealcaseController extends HouseController
{
	public function actionIndex()
	{
        if ($this->clientType == 'mobile') {
            $this->layout = '@gallerycms/views/main-mobile';
        } else {
            $this->layout = '@gallerycms/views/layouts/main-plat-pic';
        }
        $where = ['city_code' => $this->currentCityCode];
        $datas = $this->_commonDatas();
        $datas['infos'] = $this->_getInfos($where);

        $page = Yii::$app->request->get('page');
        $page = str_replace('_', '', $page);
        $pageStr = $page > 1 ? "_第{$page}页" : '';

		$dataTdk = ['{{PAGESTR}}' => $pageStr];
		$this->getTdkInfos('realcase-index', $dataTdk);
		return $this->render('index', $datas);
	}

    public function actionMerchant()
    {
        $datas = $this->_initMerchant('merchant-show');

        //$where = ['merchant_id' => $datas['info']['id']];
        $where = [];
        $infos = $this->_getInfos($where);

        $datas['realcaseInfos'] = $infos;

        $page = Yii::$app->request->get('page');
        $page = str_replace('_', '', $page);
        $pageStr = $page > 1 ? "_第{$page}页" : '';

		$dataTdk = ['{{PAGESTR}}' => $pageStr, '{{INFONAME}}' => $datas['info']['name_full']];
		$this->getTdkInfos('merchant-realcase', $dataTdk);
		return $this->render('merchant', $datas);
    }

    protected function _getInfos($where)
    {
		$model = new Realcase();

		$page = Yii::$app->request->get('page');
        $orderBy = ['created_at' => SORT_DESC];
		$infos = $model->getInfosByPage(['where' => $where, 'orderBy' => $orderBy, 'pageSize' => 12, 'pagePreStr' => '_']);
		$datas = [
			'page' => $page,
			'infos' => $infos['infos'],
            'pages' => $infos['pages'],
			'model' => $model,
		];

        return $datas;
    }

	public function actionShow()
	{
        $id = \Yii::$app->getRequest()->get('id');
        $model = new Realcase();
		$info = $model->getInfo($id);
		if (empty($info)) {
            return $this->redirect('/')->send();
		}
		$houseSortInfos = $model->houseSortInfos;
		$tagStr = '';
		foreach ($houseSortInfos as $tagKey => $tagValue) {
			if (empty($info[$tagKey])) {
				continue;
			}
			$tagKeyInfo = $info[$tagKey];
			if ($tagKey == 'area') {
				$tagKeyInfo = ceil($tagKeyInfo / 10) * 10;
				$tagKeyInfo = $tagKeyInfo > 130 ? 130 : $tagKeyInfo;
			}
			$str = $tagValue['values'][$tagKeyInfo];
			$tagStr .= $str;
			$info[$tagKey] = $str;
		}

        $dataTdk = ['{{INFONAME}}' => $info['name'], '{{TAGSTR}}' => $tagStr];
        $this->getTdkInfos('realcase-show', $dataTdk);

        $sampleModel = new Sample();
        $infos = $sampleModel->getInfos([], 18);
		$datas = [
			'info' => $info,
            'infos' => $infos,
		];
		return $this->render('show', $datas);
	}
}
