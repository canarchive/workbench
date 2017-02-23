<?php

namespace gallerycms\house\controllers;

use Yii;
use yii\web\NotFoundHttpException;
use gallerycms\components\HouseController;
use gallerycms\merchant\models\Working;

class WorkingController extends HouseController
{
	public function actionIndex()
	{
        if ($this->isMobile) {
            $this->layout = '@gallerycms/views/main-mobile';
        } else {
            $this->layout = '@gallerycms/views/layouts/main-plat-pic';
        }
        $where = ['city_code' => $this->currentCityCode];
        $datas = $this->_commonDatas();
        $datas['infos'] = $this->_getInfos($where);

        $pageStr = $datas['infos']['page'] > 1 ? "_第{$datas['infos']['page']}页-" : '-';

		$dataTdk = ['{{PAGESTR}}' => $pageStr];
		$this->getTdkInfos('realcase-index', $dataTdk);
		return $this->render('index', $datas);
	}

    public function actionMerchant()
    {
        $datas = $this->_initMerchant('merchant-show');
        //$where = ['merchant_id' => $datas['info']['id']];//$tagInfos['ids'] === null ? ['status' => 1] : ['status' => 1, 'category_id' => $tagInfos['ids']];
        $where = [];
        $infos = $this->_getInfos($where);

        $datas['workingInfos'] = $infos;

        $pageStr = $infos['page'] > 1 ? "_第{$infos['page']}页-" : '-';

		$dataTdk = ['{{PAGESTR}}' => $pageStr];
		$this->getTdkInfos('working-index', $dataTdk);
		return $this->render('merchant', $datas);
    }

    protected function _getInfos($where)
    {
		$model = new Working();

		$page = Yii::$app->request->get('page');
        $orderBy = ['created_at' => SORT_DESC];
		$infos = $model->getInfosByPage(['where' => $where, 'orderBy' => $orderBy, 'pageSize' => 12]);
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
        /*$model = new Working();
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
        $this->getTdkInfos('sample-show', $dataTdk);*/
		$datas = [
			'info' => [],//$info,
		];
		return $this->render('show', $datas);
	}
}
