<?php

namespace gallerycms\house\controllers;

use Yii;
use yii\web\NotFoundHttpException;
use gallerycms\components\MerchantController as MerchantControllerBase;
use gallerycms\merchant\models\Merchant;

class MerchantController extends MerchantControllerBase
{
	public function actionIndex()
	{
		$tag = Yii::$app->request->get('tag', '');
		$model = new Merchant();
		$merchantSortInfos = $model->merchantSortInfos;
		$tagInfos = $model->formatTag($tag, $merchantSortInfos);
		if ($tagInfos === false) {
            throw new NotFoundHttpException('页面不存在');
		}
        if ($this->clientType == 'mobile') {
            $this->layout = '@gallerycms/views/main-mobile';
        } else {
            $this->layout = '@gallerycms/views/layouts/main-plat-pic';
        }

		$page = Yii::$app->request->get('page');
		//$infos = $model->getInfos([]);
        $where = [
            'and', ['=' , 'city_code', Yii::$app->params['currentCompany']['code']]
        ];
        foreach ($tagInfos as $tField => $tValue) {
            if (empty($tValue)) {
                continue;
            }
            $where = array_merge($where, [['like', $tField, $tValue]]);
        }
        $keyword = strip_tags(Yii::$app->request->get('keyword', ''));
        if (!empty($keyword)) {
            $where = array_merge($where, [['like', 'name', $keyword]]);
        }
        //print_r($where);exit();
        $orderBy = ['created_at' => SORT_DESC];
		$infos = $model->getInfosByPage(['where' => $where, 'orderBy' => $orderBy, 'pageSize' => 18]);
		$datas = [
            'keyword' => $keyword,
			'tag' => $tag,
			'page' => $page,
			'infos' => $infos['infos'],
            'pages' => $infos['pages'],
			'tagInfos' => $tagInfos,
			'merchantSortInfos' => $merchantSortInfos,
			'model' => $model,
		];
        $datas = array_merge($datas, $this->_commonDatas());
		$tagStr = '';
        $tdkIndex = 'merchant-index';
		foreach ($tagInfos as $tagKey => $tagValue) {
			if (empty($tagValue)) {
				continue;
			}
            $tdkIndex = $tdkIndex == 'merchant-index' ? 'merchant-index-' . $tagKey : 'merchant-index-full';
			$tagStr .= $merchantSortInfos[$tagKey]['values'][$tagValue];
		}

        $page = Yii::$app->request->get('page');
        $page = str_replace('_', '', $page);
        $pageStr = $page > 1 ? "_第{$page}页" : '';

		$dataTdk = ['{{TAGSTR}}' => $tagStr, '{{PAGESTR}}' => $pageStr];
        //echo $tdkIndex;exit();
		$this->getTdkInfos($tdkIndex, $dataTdk);
		return $this->render('index', $datas);
	}
}
