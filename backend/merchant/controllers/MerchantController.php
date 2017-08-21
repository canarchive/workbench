<?php

namespace backend\merchant\controllers;

use Yii;
use yii\web\ForbiddenHttpException;
use backend\components\ControllerTraitView;
use backend\components\ControllerTraitUpdate;
use merchant\models\MerchantPond;

class MerchantController extends Controller
{
    use ControllerTraitView;
    use ControllerTraitUpdate;
    protected $modelClass = 'baseapp\merchant\models\Merchant';
    protected $modelSearchClass = 'merchant\models\searchs\Merchant';

    public function actionConew($merchant_id)
    {
        $modelPond = new MerchantPond();
        $infoPond = $modelPond->findOne($merchant_id);
        if (empty($infoPond)) {
            throw new ForbiddenHttpException('ID有误');
        }
        $info = $this->findModel($merchant_id, false);
        if (!empty($info)) {
            throw new ForbiddenHttpException('已合作');
        }
        $class = $this->modelClass;
        $model = new $class($infoPond->toArray());
        $model->save();
        return $this->redirect(['listinfo']);
    }

    protected function _checkRecordPriv($model)
    {
        $privInfo = isset(Yii::$app->params['privInfo']) ? Yii::$app->params['privInfo'] : [];
        $merchantIds = isset($privInfo['merchant_id']) ? $privInfo['merchant_id'] : null;
        if (is_null($merchantIds)) {
            return true;
        }
        if (!in_array($model->id, $merchantIds)) {
            throw new ForbiddenHttpException(Yii::t('yii', 'You are locked.'));
        }

        return true;
    }
}
