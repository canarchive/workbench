<?php

namespace ifeed\shoot\controllers;

use Yii;
use yii\web\NotFoundHttpException;
use yii\helpers\StringHelper;
use ifeed\shoot\models\Infotmp;
use ifeed\shoot\models\Categorytmp;
$_GET['mcode'] = 'shouxi';

class InfotmpController extends Controller
{
    use InfoTrait;

    public function init()
    {
        parent::init();
		//$this->formatThumb();
        $this->layout = 'main-infotmp';
		Yii::$app->params['siteHotline'] = isset($this->currentSiteInfo['hotline']) ? $this->currentSiteInfo['hotline'] : Yii::$app->params['siteHotline'];
    }

    public function actionIndex()
    {
		$this->getTdkInfos('info-index');
		return $this->render('index');
    }

	public function actionList()
	{
		$page = ltrim(Yii::$app->request->get('page'), '_');
        $categoryCode = ltrim(Yii::$app->request->get('category_code'), '_');
        $categoryInfo = $this->categoryModel->getData($categoryCode);
        if (empty($categoryInfo)) {
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
		$pageStr = $page > 1 ? "-第{$page}页" : '';

		$tdkInfo = [
			'title' => $this->getListTitle($categoryInfo, $pageStr),
			'keyword' => $categoryInfo['meta_keyword'],
			'description' => $categoryInfo['meta_description'],
		];
		$this->getTdkInfos('info-index', [], $tdkInfo);
		return $this->render('list', $datas);
	}

	public function getListTitle($info, $pageStr)
	{
		$name = !empty($info['meta_title']) ? $info['meta_title'] : $info['name'];
		return $name . $pageStr . ' - 首席高端摄影网站';
	}

	public function actionShow()
	{
        $id = Yii::$app->getRequest()->get('id');
        $model = new Infotmp();
		$info = $model->getInfo($id);
		if (empty($info)) {
            throw new NotFoundHttpException('NO found');
		}
		$categoryInfo = $this->categoryModel->getData($info['category_code']);
		$datas = [
			'info' => $info,
			'categoryCode' => $info['category_code'],
			'categoryInfo' => $categoryInfo,
		];

        $description = StringHelper::truncate(strip_tags($info['content']), 200, '');
		$tdkInfo = [
			'title' => $this->getShowTitle($info, $categoryInfo),
			'keyword' => $info['name'],
			'description' => $description,
		];
		$this->getTdkInfos('point', [], $tdkInfo);
		return $this->render('show', $datas);
	}

	public function getShowTitle($info, $cInfo)
	{
		$str = $info['name'];
		switch ($info['source_code']) {
		case '0223':
			$str .= ' - ' . $cInfo['name'] . ' - 首席高端摄影网站';
			break;
		case 'ch':
			$str .= ' - 艺生术活';
			break;
		case 'sy':
			break;
		default:
			$str .= '-摄影资讯-&nbsp;北京首席摄影工作室';
		}
		return $str;
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

    protected function _getTdkInfos()
    {
        $fileTdk = Yii::getAlias('@ifeed') . "/config/shoot/tdk-infotmp.php";
        $tdkInfos = require($fileTdk);
        return $tdkInfos;
    }
}
