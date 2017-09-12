<?php
namespace ifeed\shoot\controllers;

use Yii;
use ifeed\components\Controller as ControllerBase;
use ifeed\shoot\models\Sort;

class Controller extends Controllerbase
{
    use ControllerTrait;

    public $currentSort;
    public $currentSortInfo;
    public $sortInfos;
    public $currentElem;
    public $currentSubElem;

    public function init()
    {
        $this->currentSort = Yii::$app->request->get('scode');
        parent::init();

        $this->initSort();
		//$this->pcMappingUrl = $this->currentSiteInfo['domain'] . Yii::$app->request->url;
        //$this->mobileMappingUrl = $this->currentSiteInfo['domain_mobile'] . Yii::$app->request->url;
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
        $infos = Sort::find()->indexBy('code')->all();
        $sorts = isset($this->currentSiteInfo['sort']) ? $this->currentSiteInfo['sort'] : [];
        $datas = [];
        foreach ($sorts as $sort) {
            $datas[$sort] = $infos[$sort];
        }
        $this->currentSort = in_array($this->currentSort, array_keys($datas)) ? $this->currentSort : null;
        if (!empty($this->currentSort)) {
            $this->currentSortInfo = $datas[$this->currentSort];
        }
        $this->sortInfos = $datas;
    }

	protected function initSiteInfo()
	{
        $siteCode = Yii::$app->request->get('mcode');
        if (!in_array($siteCode, array_keys($this->siteInfos))) {
            $siteCode = in_array($this->host, [Yii::getAlias('@shoot.ifeedurl'), Yii::getAlias('@m.shoot.ifeedurl')]) ? 'shoot' : false;
			$siteCode = empty($siteCode) && !empty($this->currentSort) ? 'shoot' : false;
        }
        if (empty($siteCode)) {
           exit('404' . $siteCode);
        }
		$this->siteCode = $siteCode;
        //var_dump($siteCode);exit();
        $this->currentSiteInfo = $this->siteInfos[$siteCode];
        $this->clientType = $this->host == Yii::getAlias('@m.shoot.ifeedurl') ? 'mobile' : 'pc';
        $this->module->viewPath .= '/hulian';

        Yii::$app->params['siteName'] = $this->currentSiteInfo['name'];
        Yii::$app->params['siteNameBase'] = $this->currentSiteInfo['name'];
        Yii::$app->params['siteQQ'] = '2376816784';
        Yii::$app->params['siteIcpInfo'] = $this->currentSiteInfo['icp'];
		return ;
	}

	protected function getSiteInfos()
	{
        $file = Yii::getAlias('@app') . "/config/params-sitelist.php";
        $datas = file_exists($file) ? require($file) : [];
        return $datas;
	}
}
