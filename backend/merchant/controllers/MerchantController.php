<?php

namespace backend\merchant\controllers;

use Yii;
use yii\web\ForbiddenHttpException;
use backend\components\AdminController;
use backend\components\ControllerTraitView;
use backend\components\ControllerTraitUpdate;

class MerchantController extends AdminController
{
    use ControllerTraitView;
    use ControllerTraitUpdate;
    protected $modelClass = 'baseapp\merchant\models\Merchant';
    protected $modelSearchClass = 'merchant\models\searchs\Merchant';

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
