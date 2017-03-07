<?php

namespace gallerycms\house\controllers;

use Yii;
use yii\web\NotFoundHttpException;
use gallerycms\components\HouseController;
use gallerycms\merchant\models\MerchantComment;

class CommentController extends HouseController
{
	public function actionIndex()
	{
        $this->layout = '@gallerycms/views/layouts/main-plat-pic';
        $where = ['city_code' => 'bj'];//Yii::$app->params['currentCompany']['code']];//$tagInfos['ids'] === null ? ['status' => 1] : ['status' => 1, 'category_id' => $tagInfos['ids']];
        $datas = $this->_getInfos($where);

        $pageStr = $datas['page'] > 1 ? "_第{$datas['page']}页-" : '-';

		$dataTdk = ['{{PAGESTR}}' => $pageStr];
		$this->getTdkInfos('comment-index', $dataTdk);
		return $this->render('index', $datas);
	}

    public function actionMerchant()
    {
        $datas = $this->_initMerchant('merchant-show');
        $where = ['merchant_id' => $datas['info']['id']];
        $infos = $this->_getInfos($where);

        $datas['commentInfos'] = $infos;

        $page = Yii::$app->request->get('page');
        $page = str_replace('_', '', $page);
        $pageStr = $page > 1 ? "_第{$page}页" : '';

		$dataTdk = ['{{PAGESTR}}' => $pageStr, '{{INFONAME}}' => $datas['info']['name_full']];
		$this->getTdkInfos('merchant-comment', $dataTdk);
		return $this->render('merchant', $datas);
    }

    protected function _getInfos($where)
    {
		$model = new MerchantComment();

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
}
