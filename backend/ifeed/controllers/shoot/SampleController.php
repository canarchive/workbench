<?php

namespace backend\ifeed\controllers\shoot;

use Yii;
use backend\components\ControllerTraitFull;

class SampleController extends Controller
{
    use ControllerTraitFull;
	protected $modelClass = 'ifeed\shoot\models\Sample';
    protected $modelSearchClass = 'ifeed\shoot\models\searchs\Sample';

    public function actionListSort()
    {
        $class = $this->modelClass;
        $model = new $class();
        return $this->render('list-sort', [
			'siteInfos' => $this->siteInfos,
			'sortInfos' => $this->sortInfos,
        ]);
    }

    public function _addData()
    {
        return [
            'site_code' => Yii::$app->request->get('site_code'),
            'sort' => Yii::$app->request->get('sort'),
        ];
    }
}
