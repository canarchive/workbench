<?php

namespace gallerycms\sinfo\controllers;

use Yii;
use yii\web\NotFoundHttpException;
use yii\helpers\StringHelper;
use gallerycms\components\SinfoController;
use gallerycms\sinfo\models\Info;
use gallerycms\sinfo\models\Category;

class InfoController extends SinfoController
{
	public function actionIndex()
	{
		$page = ltrim(Yii::$app->request->get('page'), '_');
        $tag = ltrim(Yii::$app->request->get('tag'), '_');

        $where = [];//['status' => 1, 'site_code' => $this->siteCode];
        $where = empty($tag) ? $where : array_merge($where, ['sort' => $tag]);
		$model = new Info();
        $orderBy = ['created_at' => SORT_DESC];
		$infos = $model->getInfosByPage(['where' => $where, 'orderBy' => $orderBy, 'pageSize' => 10, 'pagePreStr' => '_', 'noHost' => true]);
        $currentSortName = isset($model->sortInfos[$tag]) ? $model->sortInfos[$tag] : '';
		$datas = [
			'page' => $page,
			'model' => $model,
            'currentSort' => $tag,
            'currentSortName' => $currentSortName,
			'infos' => $infos['infos'],
            'pages' => $infos['pages'],
		];
		$pageStr = $page > 1 ? "第{$page}页-" : '';

        $tagStr = !empty($currentSortName) ? $currentSortName : '企业营销学院_北京营销学院_企业网络营销';
		$dataTdk = ['{{TAGSTR}}' => $currentSortName, '{{PAGESTR}}' => $pageStr];
		$this->getTdkInfos('info-index', $dataTdk);
		return $this->render('index', $datas);
	}

	public function actionShow()
	{
        $id = Yii::$app->getRequest()->get('id');
        $model = new Info();
		$info = $model->getInfo($id);
		if (empty($info)) {
            throw new NotFoundHttpException('NO found');
		}

        //$description = str_replace(' ', '', $info['description']);
        $description = StringHelper::truncate(strip_tags($info['content']), 200, '');
		$dataTdk = ['{{INFONAME}}' => $info['name'], '{{TAGSTR}}' => $info['tags'], '{{DESCRIPTION}}' => $description];
		$this->getTdkInfos('info-show', $dataTdk);

        $infos = $model->getInfos(['site_code' => $info['site_code'], 'sort' => $info['sort']], 6);
		$datas = [
            'model' => $model,
            'currentSort' => $info['sort'],
            'currentSortName' => isset($model->sortInfos[$info['sort']]) ? $model->sortInfos[$info['sort']] : '',
			'info' => $info,
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
}
