<?php

namespace ifeed\shoot\controllers;

use Yii;
use yii\web\NotFoundHttpException;
use yii\helpers\StringHelper;
use ifeed\shoot\models\Infotmp;
use ifeed\shoot\models\Categorytmp;

class InfotmpController extends Controller
{
    use InfoTrait;

    public function init()
    {
        parent::init();
		//$this->formatThumb();
        $this->layout = 'main-infotmp';
    }

    public function actionIndex()
    {
		return $this->render('index');
    }

	public function actionList()
	{
		$page = ltrim(Yii::$app->request->get('page'), '_');
        $categoryCode = ltrim(Yii::$app->request->get('category_code'), '_');
        $categoryInfo = $this->categoryModel->getData($categoryCode);
        if (empty($categoryInfo)) {
			echo $categoryCode; exit();
            throw new NotFoundHttpException('NO found');
        }
        $where = [
            'status' => 1,
            'category_code' => array_merge([$categoryCode], array_keys($this->categoryModel->getSubDatas($categoryCode))),
        ];
		$model = new Infotmp();
        $orderBy = ['created_at' => SORT_DESC];
		$infos = $model->getInfosByPage(['where' => $where, 'orderBy' => $orderBy, 'pageSize' => 10, 'pagePreStr' => '_', 'noHost' => true]);
		$datas = [
			'page' => $page,
			'model' => $model,
            'categoryCode' => $categoryCode,
            'categoryInfo' => $categoryInfo,
			'infos' => $infos['infos'],
            'pages' => $infos['pages'],
		];
		$pageStr = $page > 1 ? "第{$page}页-" : '';

        $categoryCodeStr = !empty($currentSortName) ? $currentSortName : '获取访客信息攻略';
		$dataTdk = ['{{CATEGORYSTR}}' => $categoryInfo['name'], '{{PAGESTR}}' => $pageStr];
		$this->getTdkInfos('info-index', $dataTdk);
		return $this->render('list', $datas);
	}

	public function actionShow()
	{
        $id = Yii::$app->getRequest()->get('id');
        $model = new Infotmp();
		$info = $model->getInfo($id);
		if (empty($info)) {
            throw new NotFoundHttpException('NO found');
		}

        /*$description = StringHelper::truncate(strip_tags($info['content']), 200, '');
		$dataTdk = ['{{INFONAME}}' => $info['name'], '{{TAGSTR}}' => $info['tags'], '{{DESCRIPTION}}' => $description];
		$this->getTdkInfos('info-show', $dataTdk);*/
		$datas = [
			'info' => $info,
			'categoryCode' => $info['category_code'],
			'categoryInfo' => $this->categoryModel->getData($info['category_code']),
		];
		return $this->render('show', $datas);
	}

    public function getCategoryModel()
    {
        return new Categorytmp();
    }

	public function formatThumb()
	{
		$model = new Infotmp();
		$model->formatThumb();
	}
}
