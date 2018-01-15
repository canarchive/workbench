<?php
namespace spread\components;

use Yii;
use yii\helpers\Url;
use common\components\Controller as CommonController;

class Controller extends CommonController
{
    public $host;
    public $isMobile;
    public function init()
    {
        parent::init();

        $this->host = \Yii::$app->request->hostInfo;
        $hostPc = Yii::getAlias('@spreadurl');
        $hostMobile = Yii::getAlias('@m.spreadurl');
        //$this->isMobile = $this->clientIsMobile();
        $this->isMobile = in_array($this->host, Yii::$app->params['mHosts']) ? true : false;
        $this->_getHostKey();

        $url = Yii::$app->request->url;
        $cityCode = isset($this->module->currentCityCode) ? $this->module->currentCityCode : null;
        $redirect = strpos($url, 'index.php') !== false ? true : false;
        $redirect = empty($redirect) ? $this->isMobile && $this->host != $hostMobile : $redirect;
        $redirect = empty($redirect) ? !$this->isMobile && $this->host == $hostMobile : $redirect;
        $redirect = empty($redirect) ? $this->host == $hostMobile && is_null($cityCode) && $url == '/' : $redirect;
        if ($redirect) {
            $rule = $this->_redirectRule();
            /*$url = Url::to([$rule, 'city_code' => Yii::$app->params['currentCompany']['code_short']]);
            header("Location:$url");
            //return Yii::$app->response->redirect($url)->send();
            exit();*/
        }

        if (isset($this->module->viewPath)) {
            $this->module->viewPath .= $this->isMobile ? '/mobile' : '/pc';
        }
    }

    protected function _redirectRule()
    {
    }

    protected function _getHostKey()
    {   
        $host = $this->host;
        if (strpos($host, 'toteme.cn') !== false) {
            $hostKey = 'toteme';
        } elseif (strpos($host, 'btcfang.cn') !== false) {
            $hostKey = 'btc';
            Yii::$app->params['siteCopyRightInfo'] = '北京力新国际投资招商有限公司 ';
        } else  {
            $hostKey = ''; 
        }   

        Yii::$app->params['hostKey'] = $hostKey;
        Yii::$app->params['hostAliasPc'] = "@{$hostKey}spreadurl";
        Yii::$app->params['hostAliasMobile'] = "@m.{$hostKey}spreadurl";
    }

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
