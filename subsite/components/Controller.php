<?php
namespace subsite\components;

use Yii;
use yii\helpers\Url;
use common\components\Controller as CommonController;

class Controller extends CommonController
{
    public $currentDomain;

    public function init()
    {
        parent::init();

    }
}
