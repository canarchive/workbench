<?php

namespace backend\ifeed\controllers\shoot;

use Yii;
use backend\components\AdminController;
use ifeed\shoot\models\Sort;

abstract class Controller extends AdminController
{
	public $pointSite;

	public function beforeAction($action)
	{
		parent::beforeAction($action);
		$manager = Yii::$app->params['managerInfo'];
		switch ($manager['name']) {
		case 'hanhan':
			$this->pointSite = 'hstudio';
			break;
		default:
		}
		$siteCode = Yii::$app->request->get('site_code');
		if (!is_null($this->pointSite) && !is_null($siteCode) && $siteCode != $this->pointSite) {
			exit('您没有权限');
		}
		return true;
	}

    public function getViewPrefix()
    {
        return "@backend/ifeed/views/{$this->id}/";
    }

	protected function getSiteInfos()
	{
        $file = Yii::getAlias('@ifeed') . "/config/params-sitelist.php";
        return require($file);
	}

	protected function getSortInfos()
	{
		$model = new Sort();
		$infos = $model->getInfosBySite();
		return $infos;
	}
}
