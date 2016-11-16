<?php

namespace backend\controllers;

use Yii;
use common\models\Company;
use common\models\searchs\Company as CompanySearch;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;

class CompanyController extends AdminController
{
    protected $modelClass = 'common\models\Company';

    public function actionListinfo()
    {
        $searchModel = new CompanySearch();
        return $this->_listinfoInfo($searchModel);
    }

    public function actionView($id)
    {
        return $this->_viewInfo($id);
    }

    public function actionAdd()
    {
        return $this->_addInfo(new Company());
    }

    public function actionUpdate($id = 0)
    {
        if (Yii::$app->request->isAjax) {
            return $this->_updateByAjax();
        }

        return $this->_updateInfo($id);
    }

    public function actionDelete($id)
    {
        return $this->_deleteInfo($id);
    }
}
