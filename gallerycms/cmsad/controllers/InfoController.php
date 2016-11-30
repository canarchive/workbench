<?php

namespace gallerycms\cmsad\controllers;

use Yii;
use yii\web\NotFoundHttpException;
use gallerycms\components\CmsadController;
use gallerycms\cmsad\models\Article;
use gallerycms\cmsad\models\Category;

class InfoController extends CmsadController
{
	public function actionIndex()
	{
		$page = Yii::$app->request->get('page');
        $tag = Yii::$app->request->get('tag');
        $tagInfos = $this->_checkTag($tag);
        //print_r($tagInfos);exit();

        $where = $tagInfos['ids'] === null ? [] : ['category_id' => $tagInfos['ids']];
		$model = new Article();
		$infos = $model->getInfos($where, 15);
		$datas = [
			'page' => $page,
			'model' => $model,
			'infos' => $infos,
            'tagInfos' => $tagInfos,
		];
		$pageStr = $page > 1 ? "_第{$page}页-" : '-';

        $tagStr = isset($tagInfo['cInfo']) ? $tagInfo['cInfo']['name'] : '资讯列表';
		$dataTdk = ['{{TAGSTR}}' => $tagStr, '{{PAGESTR}}' => $pageStr];
		$this->getTdkInfos('sample-index', $dataTdk);
		return $this->render('index', $datas);
	}

	public function actionShow()
	{
        $id = Yii::$app->getRequest()->get('id');
        $model = new Article();
		$info = $model->getInfo($id);
		if (empty($info)) {
            throw new NotFoundHttpException('NO found');
		}

        $cModel = new Category();
        $categoryInfo = $cModel->getInfo($info['category_id']);
        $tagInfos = $this->_checkTag($categoryInfo['catdir']);

		$dataTdk = ['{{INFONAME}}' => $info['name']];
		$this->getTdkInfos('sample-show', $dataTdk);

        $infos = $model->getInfos(['category_id' => $tagInfos['ids']], 6);
		$datas = [
			'info' => $info,
            'tagInfos' => $tagInfos,
            'infos' => $infos,
		];
		return $this->render('show', $datas);
	}

    protected function _categoryInfos()
    {
        static $datas = null;

        if ($datas === null) {
            $model = new Category();
            $datas['infos'] = $model->getDatas('catdir');
            $datas['levelInfos'] = $model->getlevelDatas();
        }

        return $datas;
    }

    protected function _checkTag($tag)
    {
        $datas = $this->_categoryInfos();
        $infos = $datas['infos'];
        $levelInfos = $datas['levelInfos'];
        if ($tag == '') {
            $return = [
                'id' => 0,
                'parent_id' => null,
                'ids' => null,
                'cInfo' => [],
                'pInfo' => [],
                'cInfos' => $levelInfos,
            ];
            return $return;
        }

        $cInfo = isset($infos[$tag]) ? $infos[$tag] : [];
        if (empty($cInfo)) {
            throw new NotFoundHttpException('NO found');
        }
        $id = $cInfo['id'];
        $parentId = $cInfo['parent_id'];
        $pInfo = $parentId == 0 ? [] : $levelInfos[$parentId];

        $ids = $parentId == 0 ? array_keys($levelInfos[$id]['subInfos']) : [$id];
        $cInfos = $parentId == 0 ? $levelInfos[$id]['subInfos'] : $levelInfos[$parentId]['subInfos'];

        $return = [
            'id' => $id, 
            'parentId' => $parentId,
            'ids' => $ids,
            'cInfo' => $cInfo,
            'pInfo' => $pInfo,
            'cInfos' => $cInfos,
        ];
        return $return;
    }
}
