<?php

namespace backend\controllers;

use Yii;
use backend\models\RuleManager;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;
use backend\components\ControllerTraitView;
use backend\components\ControllerTraitAdd;

/**
 * Description of RuleController
 */
class RuleController extends AdminController
{
	use ControllerTraitView;
	use ControllerTraitAdd;
    protected $modelClass = 'backend\models\RuleManager';
    protected $modelSearchClass = 'backend\models\searchs\RuleManager';

    /**
     * Deletes an existing AuthItem model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param  string $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $model = $this->findModel($id);
        Yii::$app->authManager->remove($model->item);

        return $this->redirect(['listinfo']);
    }

    /**
     * Finds the AuthItem model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param  string        $id
     * @return AuthItem      the loaded model
     * @throws HttpException if the model cannot be found
     */
    protected function findModel($id, $throwException = true)
    {
        $item = Yii::$app->authManager->getRule($id);
        if ($item) {
            return new RuleManager($item);
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
