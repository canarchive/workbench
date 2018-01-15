<?php
namespace merchant\components;

use Yii;
use merchant\models\Merchant;

class LoginedController extends Controller
{
    public $userInfo;
    public $merchantInfo;

    public $layout = 'main-logined';

    public function init()
    {
        parent::init();
        $this->userInfo = Yii::$app->user->getIdentity();
        $merchant = new Merchant();
		$merchantId = trim($this->userInfo['merchant_id'], ',');
        $this->merchantInfo = $merchant->getInfo(['id' => $merchantId]);
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
