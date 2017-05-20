<?php
namespace spread\components;

use Yii;
use yii\helpers\Url;
use common\components\Controller as CommonController;

class Controller extends CommonController
{

    public function init()
    {
        parent::init();
    }

    protected function _redirectRule()
    {}
}
