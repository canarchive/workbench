<?php

namespace gallerycms\sinfo\controllers;

use Yii;
use yii\web\NotFoundHttpException;
use yii\helpers\StringHelper;
use gallerycms\components\SinfoController;
use gallerycms\sinfo\models\Article;
use gallerycms\sinfo\models\Category;

class InfoController extends SinfoController
{
	public function actionIndex()
	{
		$page = ltrim(Yii::$app->request->get('page'), '_');
        $tag = ltrim(Yii::$app->request->get('tag'), '_');
        $tagInfos = $this->_checkTag($tag);

        $where = $tagInfos['ids'] === null ? ['status' => 1] : ['status' => 1, 'category_id' => $tagInfos['ids']];
		$model = new Article();
        $orderBy = ['created_at' => SORT_DESC];
		$infos = $model->getInfosByPage(['where' => $where, 'orderBy' => $orderBy, 'pageSize' => 10, 'pagePreStr' => '_', 'noHost' => true]);
		$datas = [
			'page' => $page,
			'model' => $model,
            'tagInfos' => $tagInfos,
			'infos' => $infos['infos'],
            'pages' => $infos['pages'],
		];
		$pageStr = $page > 1 ? "第{$page}页-" : '';

        $tagStr = isset($tagInfos['cInfo']['name']) ? $tagInfos['cInfo']['name'] : '企业营销学院_北京营销学院_企业网络营销';
		$dataTdk = ['{{TAGSTR}}' => $tagStr, '{{PAGESTR}}' => $pageStr];
		$this->getTdkInfos('info-index', $dataTdk);
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

        //$description = str_replace(' ', '', $info['description']);
        $description = StringHelper::truncate(strip_tags($info['content']), 200, '');
		$dataTdk = ['{{INFONAME}}' => $info['name'], '{{TAGSTR}}' => $info['tags'], '{{DESCRIPTION}}' => $description];
		$this->getTdkInfos('info-show', $dataTdk);

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
