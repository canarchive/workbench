<?php
namespace gallerycms\components;

use Yii;
use yii\helpers\Url;

class SinfoController extends Controller
{
    public $siteCode;
    public $hostInfos;
    public $siteInfos;
    public $currentSiteInfo;
    public $clientType;

    public function init()
    {
        parent::init();

        $host = Yii::$app->request->hostInfo;
        $this->siteInfos = require Yii::getAlias('@gallerycms') . '/config/sinfo/site-infos.php';
        $this->hostInfos = require Yii::getAlias('@gallerycms') . '/config/sinfo/host-infos.php';
        foreach ($this->hostInfos as $clientType => $hostInfos) {
            foreach ($hostInfos as $siteCode => $hostInfo) {
                if ($this->siteCode) {
                    break;
                }
                if ($hostInfo == $host) {
                    $this->clientType = $clientType;
                    $this->siteCode = $siteCode;
                    break;
                }
            }
        }

        $this->host = $host;
        $this->currentSiteInfo = $this->siteInfos[$this->siteCode];
        $this->isMobile = $this->clientType == 'mobile' ? true : false;
        if (isset($this->module->viewPath)) {
            $this->module->viewPath .= $this->isMobile ? '/mobile' : '/pc';
        }
    }

	protected function _redirectRule()
	{
        $rule = $this->isMobile ? '/sinfo/mobile-site/index' : '/sinfo/site/home';
        $url = Url::to([$rule, 'city_code' => Yii::$app->params['currentCompany']['code']]);
        header("Location:$url");
        //return Yii::$app->response->redirect($url)->send();
        exit();
	}

    protected function _getTdkInfos()
    {
        $baseTdkInfos = require(Yii::getAlias('@gallerycms') . '/config/sinfo/tdk.php');
        foreach ($baseTdkInfos as $key => $value) {

        }
        return $baseTdkInfos;
    }

    public function _initAsset()
    {
        $infos = require Yii::getAlias('@app') . '/config/sinfo/asset.php';
        Yii::$app->params['cssFiles'] = $infos['cssFiles'];
        Yii::$app->params['jsFiles'] = $infos['jsFiles'];
        return ;
    }
}
