<?php
namespace merchant\components;

use backend\components\AdminController as AdminControllerBase;

class AdminController extends AdminControllerBase
{
    public $layout = 'main-admin';

    public function init()
    {
        parent::init();
    }

    public function getMenuInfos()
    {
        $data = [
        ];
    }
}
