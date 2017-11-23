<?php
namespace ifeed\shoot\controllers;

use Yii;
use ifeed\components\Controller as ControllerBase;
use ifeed\shoot\models\Sort;

class Controller extends Controllerbase
{
    use ControllerTrait;

    public $domainBase;
	public $currentDomain;
    public $sourceSort;
    public $currentSort;
    public $currentSortInfo;
    public $sortInfos;
    public $currentElem;
    public $currentSubElem;

    public function init()
    {
        $this->sourceSort = Yii::$app->request->get('scode');
        $this->domainBase = Yii::getAlias('@domain-base');
        parent::init();
		Yii::$app->params['siteHotline'] = isset($this->currentSiteInfo['hotline']) ? $this->currentSiteInfo['hotline'] : Yii::$app->params['siteHotline'];

        $this->initSort();
    }

	protected function _redirectRule()
	{
        header("Location:/");
        //return Yii::$app->response->redirect($url)->send();
        exit();
	}

    protected function _getTdkInfos()
    {
        $fileTdk = Yii::getAlias('@ifeed') . "/config/shoot/tdk-{$this->siteCode}.php";
        $tdkInfos = require($fileTdk);
        return $tdkInfos;
    }

    protected function initSort()
    {
		$sModel = new Sort();
		$datas = $sModel->getInfosBySite();
		$this->sortInfos = $sortInfos = isset($datas[$this->siteCode]) ? $datas[$this->siteCode] : [];

        $this->currentSort = in_array($this->sourceSort, array_keys($sortInfos)) ? $this->sourceSort : null;
        if (!empty($this->currentSort)) {
            $this->currentSortInfo = $sortInfos[$this->currentSort];
        }
    }

	protected function initSiteInfo()
	{
        $siteCode = Yii::$app->request->get('mcode');
        if (!in_array($siteCode, array_keys($this->siteInfos))) {
            $siteCode = in_array($this->host, [Yii::getAlias('@shoot.ifeedurl'), Yii::getAlias('@m.shoot.ifeedurl')]) ? 'shoot' : false;
			$siteCode = 'shoot';//!empty($siteCode) ? $siteCode : (!empty($this->currentSort) || $this->sourceSort == 'all' ? 'shoot' : false);
        }
        if (empty($siteCode)) {
           exit('404' . $siteCode);
        }
		$this->siteCode = $siteCode;
        //var_dump($siteCode);exit();
        $this->currentSiteInfo = $this->siteInfos[$siteCode];
        $this->clientType = $this->host == Yii::getAlias('@m.shoot.ifeedurl') ? 'mobile' : 'pc';
        $this->module->viewPath .= '/hulian';

		if ($this->clientType == 'mobile') {
			$this->currentDomain = Yii::getAlias('@m.shoot.ifeedurl');
		} else {
			$this->currentDomain = $this->siteCode == 'shoot' ? Yii::getAlias('@shoot.ifeedurl') : "http://sj{$this->siteCode}.{$this->domainBase}";
		}

        Yii::$app->params['siteName'] = $this->currentSiteInfo['name'];
        Yii::$app->params['siteNameBase'] = $this->currentSiteInfo['name'];
        //Yii::$app->params['siteQQ'] = '2376816784';
        Yii::$app->params['siteQQ'] = '2593003545';
        Yii::$app->params['siteIcpInfo'] = $this->currentSiteInfo['icp'];
		return ;
	}

	protected function getSiteInfos()
	{
        $file = Yii::getAlias('@app') . "/config/params-sitelist.php";
        $datas = file_exists($file) ? require($file) : [];
        return $datas;
	}

	public function getServiceUrl()
	{
		//return 'http://p.qiao.baidu.com/cps/chat?siteId=10905381&userId=23986957';
		$qq = Yii::$app->params['siteQQ'];
        $qqMobile = "mqqwpa://im/chat?chat_type=wpa&uin={$qq}&version=1&src_type=web&web_src=hulianyingxiang.cn";
        $qqUrl = "http://wpa.qq.com/msgrd?v=3&uin={$qq}&site=qq&menu=yes";
		return $this->clientType == 'mobile' ? $qqMobile : $qqUrl;
	}

    public function formatMappingUrl($page, $params = [])
    {
        $sort = $this->sourceSort == $this->currentSort ? $this->currentSort : null;
        $sortStr = empty($sort) ? '' : "lm{$sort}";

        $pcDomain = Yii::getAlias('@shoot.ifeedurl');
        $mobileDomain = Yii::getAlias('@m.shoot.ifeedurl');

        if ($this->siteCode == 'shoot') {
            $siteStr = '';
            $pcDomain = empty($sortStr) ? $pcDomain : "http://{$sortStr}.{$this->domainBase}";
        } else {
            $siteStr = "sj{$this->siteCode}";
            $sortStr = empty($sortStr) ? '' : "-{$sortStr}";
            $pcDomain = "http://{$siteStr}{$sortStr}.{$this->domainBase}";
            //$mobileDomain .= empty($sortStr) ? "/{$siteStr}/" : "/{$siteStr}-{$sortStr}/";
        }
        
        switch ($page) {
        case 'sample-index':
            $page = $params['page'];
            $pageStr = $page <= 1 ? '' : "{$page}/";
            $this->pcMappingUrl = $pcDomain . "/{$pageStr}";
			$urlStr = "/{$siteStr}{$sortStr}/{$pageStr}";
			$urlStr = str_replace('//', '/', "/{$siteStr}{$sortStr}/");
            $this->mobileMappingUrl = $mobileDomain . $urlStr;
            break;
        case 'sample-show':
            $id = $params['id'];
            $this->pcMappingUrl = $pcDomain . "/caseshow_{$id}.html";
            $this->mobileMappingUrl = $mobileDomain . "/{$siteStr}/caseshow_{$id}.html";
            break;
		case 'aboutus':
			$view = $params['view'];
            $this->pcMappingUrl = $pcDomain . "/{$view}.html";
            $this->mobileMappingUrl = $mobileDomain . "/{$siteStr}/{$view}.html";
            break;

        default:
            $this->pcMappingUrl = $pcDomain;
			$urlStr = str_replace('//', '/', "/{$siteStr}{$sortStr}/");
            $this->mobileMappingUrl = $mobileDomain . $urlStr;
        }
    }

	public function getSiteUrl()
	{
		if ($this->clientType == 'mobile') {
			$siteStr = $this->siteCode == 'shoot' ? '' : "/sj{$this->siteCode}/";
			return $this->currentDomain . $siteStr;
		}
		return $this->currentDomain;
	}

    public function getShowUrl($id)
    {
        $url = $this->currentDomain;
        $base = "/caseshow_{$id}.html";
        if ($this->clientType == 'mobile') {
            $url .= $this->siteCode == 'shoot' ? $base : "/sj{$this->siteCode}{$base}";
        } else {
            $url .= $base;
        }
        return $url;
    }
}
