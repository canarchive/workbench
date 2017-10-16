<?php

namespace merchant\admin\controllers\merchant;

use Yii;
use backend\merchant\controllers\MerchantPondController as MerchantPondControllerBase;

class MerchantPondController extends MerchantPondControllerBase
{
    use BaseTrait;
    public function beforeAction($action)
    {
        $managerInfo = Yii::$app->params['managerInfo'];
        if ($action->id == 'listinfo' && $managerInfo['role'] == 'service-saleman') {
            $this->noActionColumn = true;
        }

        return parent::beforeAction($action);
    }

    protected function privGetIgnore()
    {
        return ['merchant_id'];
    }

    public function actionListinfo()
    {
        $_GET['current_action'] = 'listinfo';
        return parent::actionListinfo();
    }

    public function actionMyself()
    {
        $_GET['current_action'] = 'myself';
        return parent::actionListinfo();
    }

    public function actionFollow()
    {
        $_GET['current_action'] = 'follow';
        return parent::actionListinfo();
    }
}
