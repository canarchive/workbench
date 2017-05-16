<?php
namespace merchant\components;

use backend\components\AdminController as AdminControllerBase;

class AdminController extends AdminControllerBase
{
    public $menuInfos = ['appMenus' => [], 'menus' => [], 'currentMenu' => [], 'parentMenu' => []];
    public $showSubnav = true;
    protected $modelClass = '';
    protected $viewPrefix = '';

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
