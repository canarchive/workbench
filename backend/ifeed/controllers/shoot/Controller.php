<?php

namespace backend\ifeed\controllers\shoot;

use Yii;
use backend\components\AdminController;
use ifeed\shoot\models\Sort;

abstract class Controller extends AdminController
{
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
