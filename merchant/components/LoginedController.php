<?php
namespace merchant\components;

use Yii;
use merchant\models\Merchant;

class LoginedController extends Controller
{
    public $userInfo;
    public $merchantInfo;
    public $menuInfos = ['appMenus' => [], 'menus' => [], 'currentMenu' => [], 'parentMenu' => []];
    public $showSubnav = true;
    protected $modelClass = '';
    protected $viewPrefix = '';

    //public $layout = 'main-logined';
    public $layout = 'main-admin';

    public function init()
    {
        parent::init();
        $this->userInfo = Yii::$app->user->getIdentity();
        $merchant = new Merchant();
        $this->merchantInfo = $merchant->getInfo(['id' => $this->userInfo['merchant_id']]);
        //print_r($this->userInfo);
        //print_r($this->merchantInfo);
    }

    protected function getSpreadModel($modelName)
    {
        static $models = null;
        if (!isset($models[$modelName])) {
            $models[$modelName] = empty($this->merchantInfo) ? false : $this->merchantInfo->getSpreadModel($modelName);
        }
        return $models[$modelName];
    }
}
