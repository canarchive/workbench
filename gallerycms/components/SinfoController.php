<?php
namespace gallerycms\components;

use Yii;
use yii\helpers\Url;

class SinfoController extends Controller
{
    public $siteCode;
    public $siteInfos;
    public $currentSiteInfo;
    public $clientType;

    public function init()
    {
        parent::init();

        $host = Yii::$app->request->hostInfo;
        $this->siteInfos = require Yii::getAlias('@gallerycms') . '/config/sinfo/site-infos.php';
        foreach ($this->siteInfos as $siteCode => $info) {
            if (empty($this->siteCode) && $info['pc'] == $host) {
                $this->clientType = 'pc';
                $this->siteCode = $siteCode;
            }
            if (empty($this->siteCode) && $info['mobile'] == $host) {
                $this->clientType = 'mobile';
                $this->siteCode = $siteCode;
            }
        }

        $this->host = $host;
        $this->currentSiteInfo = $this->siteInfos[$this->siteCode];
        Yii::$app->params['siteName'] = $this->currentSiteInfo['name'];
        Yii::$app->params['siteNameBase'] = $this->currentSiteInfo['name'];
        Yii::$app->params['siteQQ'] = '2376816784';
        Yii::$app->params['siteCopyRightInfo'] = "Coptyright&nbsp;&copy;&nbsp;2009-2017&nbsp;{$this->currentSiteInfo['domain']},All&nbsp;rights&nbsp;reserved.&nbsp;";
        Yii::$app->params['siteIcpInfo'] = $this->currentSiteInfo['icp'];
        $this->clientType == 'mobile' ? true : false;
        $this->isMobile = $this->clientIsMobile();
        if (isset($this->module->viewPath)) {
            $this->module->viewPath .= $this->clientType == 'mobile' ? '/mobile' : '/pc';
        }
		$this->pcMappingUrl = $this->currentSiteInfo['pc'] . Yii::$app->request->url;
		$this->mobileMappingUrl = $this->currentSiteInfo['mobile'] . Yii::$app->request->url;
    }

	protected function _redirectRule()
	{
        header("Location:/");
        //return Yii::$app->response->redirect($url)->send();
        exit();
	}

    protected function _getTdkInfos()
    {
        $baseTdkInfos = require(Yii::getAlias('@gallerycms') . "/config/sinfo/tdk-base.php");
        $siteTdkInfos = require(Yii::getAlias('@gallerycms') . "/config/sinfo/tdk.php");
        $tdkInfos = array_merge($baseTdkInfos, $siteTdkInfos[$this->siteCode]);
        return $tdkInfos;
    }

    public function _initAsset()
    {
        $infos = require Yii::getAlias('@app') . '/config/sinfo/asset.php';
        Yii::$app->params['cssFiles'] = $infos['cssFiles'];
        Yii::$app->params['jsFiles'] = $infos['jsFiles'];
        return ;
    }
}
