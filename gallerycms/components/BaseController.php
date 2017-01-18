<?php
namespace gallerycms\components;

use Yii;

class BaseController extends Controller
{
    public $mHosts;
    public $clientType;
    public $layout = '@gallerycms/views/layouts/main-merchant';

    public function init()
    {
        parent::init();
        $this->host = Yii::$app->request->hostInfo;

        $this->isMobile = $this->clientIsMobile();
        $this->mHosts = Yii::$app->params['mHosts'];
        if (in_array($this->host, $this->mHosts)) {
            $this->clientType = 'mobile';
            $this->isMobile = true;
        }

        if (isset($this->module->viewPath)) {
            $this->module->viewPath .= $this->clientType ? '/mobile' : '/pc';
        }

		$this->pcMappingUrl = '/';
		$this->mobileMappingUrl = '/';
    }

    public function _initAsset()
    {
        $a1 = require Yii::getAlias('@app') . '/config/house/asset-jmw.php';
        $a2 = require Yii::getAlias('@app') . '/config/house/asset-quote.php';
        $a3 = require Yii::getAlias('@app') . '/config/house/asset-to8to.php';
        Yii::$app->params['cssFiles'] = array_merge($a1['cssFiles'], $a2['cssFiles'], $a3['cssFiles']);
        Yii::$app->params['jsFiles'] = array_merge($a1['jsFiles'], $a2['jsFiles'], $a3['jsFiles']);
        return ;
    }
}
