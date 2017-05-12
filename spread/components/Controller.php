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

    public function _statistic($class)
    {
        $channel = Yii::$app->getRequest()->get('qudao');
        $method = Yii::$app->getRequest()->method;
        $isMobile = $this->clientIsMobile();
        if ($channel && $method == 'GET') {
            $visit = new $class();
            $visit->writeVisitLog($isMobile);
        }
        //echo json_encode([]);//Yii::getAlias('@asseturl') . '/common/images/blank.gif';

        return ;
    }
}
