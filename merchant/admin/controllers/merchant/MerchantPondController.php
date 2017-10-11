<?php

namespace merchant\admin\controllers\merchant;

use backend\merchant\controllers\MerchantPondController as MerchantPondControllerBase;

class MerchantPondController extends MerchantPondControllerBase
{
    use BaseTrait;
    public function beforeAction($action)
    {
        if ($action->id == 'listinfo') {
            $this->noActionColumn = true;
        }

        return parent::beforeAction($action);
    }

    protected function privGetIgnore()
    {
        return ['merchant_id'];
    }

    public function actionMyself()
    {
        $_GET['current_action'] = 'myself';
        return $this->actionListinfo();
    }

    public function actionFollow()
    {
        $_GET['current_action'] = 'follow';
        return $this->actionListinfo();
    }
}
