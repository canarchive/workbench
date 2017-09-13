<?php

namespace backend\ifeed\controllers\shoot;

use baseapp\common\controllers\PositionTrait;

class PositionController extends Controller
{
    use PositionTrait;
    protected $modelClass = 'ifeed\shoot\models\Position';
    protected $modelSearchClass = 'ifeed\shoot\models\searchs\Position';

    public function actionListSort()
    {
        $class = $this->modelClass;
        $model = new $class();
        return $this->render('list-sort', [
			'siteInfos' => $this->siteInfos,
			'sortInfos' => $this->sortInfos,
        ]);
    }
}
