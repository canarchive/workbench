<?php

namespace merchant\admin\controllers\merchant;

use backend\merchant\controllers\MerchantController as MerchantControllerBase;

class MerchantController extends MerchantControllerBase
{
    use BaseTrait;

    public function beforeAction($action)
    {
        if ($action->id == 'conew') {
            $this->forceSkipPriv = true;
        }

        return parent::beforeAction($action);
    }
}
