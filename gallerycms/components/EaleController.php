<?php
namespace gallerycms\components;

use Yii;
use yii\helpers\Url;
use gallerycms\eale\models\Adpicture;
use gallerycms\eale\models\Sample;

class EaleController extends Controller
{
    public $siteCode = 'eale';
	public $clientType;
    public $pageInfos;
    public $currentPage = 'site-index';

    public function init()
    {
        parent::init();

        $host = Yii::$app->request->hostInfo;
        $hostInfos = [
            Yii::getAlias('@eale.cmsurl') => 'eale-pc',
            Yii::getAlias('@m.eale.cmsurl') => 'eale-mobile',
            Yii::getAlias('@ieale.cmsurl') => 'ieale-pc',
            Yii::getAlias('@m.ieale.cmsurl') => 'ieale-mobile',
            Yii::getAlias('@iealecn.cmsurl') => 'iealecn-pc',
            Yii::getAlias('@m.iealecn.cmsurl') => 'iealecn-mobile',
        ];
        $hostInfo = isset($hostInfos[$host]) ? $hostInfos[$host] : 'eale-pc';
        list($siteCode, $hostType) = explode('-', $hostInfo);
        $this->siteCode = $siteCode;
		$this->pcMappingUrl = $this->siteInfos[$this->siteCode]['url'] . Yii::$app->request->url;
		$this->mobileMappingUrl = $this->siteInfos[$this->siteCode]['urlMobile'] . Yii::$app->request->url;
        $this->host = $host;
        $this->clientType = $hostType;
		$this->isMobile = $this->clientIsMobile();
		//$this->isMobile = $this->clientType == 'mobile';
	
        if (isset($this->module->viewPath)) {
            $this->module->viewPath .= $this->clientType == 'mobile' ? '/mobile' : '/pc';
        }

        $this->pageInfos = require Yii::getAlias('@app') . '/config/eale/url-base.php';
    }

	protected function _redirectRule()
	{
        $rule = $this->isMobile ? '/eale/mobile-site/index' : '/eale/site/home';
        $url = Url::to([$rule, 'city_code' => Yii::$app->params['currentCompany']['code']]);
        echo $url . '--' .$rule;exit();
        header("Location:$url");
        //return Yii::$app->response->redirect($url)->send();
        exit();
	}

    protected function _getTdkInfos()
    {
        return require(Yii::getAlias('@gallerycms') . '/config/eale/tdk-' . $this->siteCode . '.php');
    }

    protected function _getHost($type)
    {
        $host = $type == 'mobile' ? Yii::getAlias('@m.eale.cmsurl') : Yii::getAlias('@eale.cmsurl');
        return $host;
    }

    public function _initAsset()
    {
        $infos = require Yii::getAlias('@app') . '/config/eale/asset.php';
        Yii::$app->params['cssFiles'] = $infos['cssFiles'];
        Yii::$app->params['jsFiles'] = $infos['jsFiles'];
        return ;
    }

    protected function _getSiteCode()
    {
    }

    public function getSiteInfos()
    {
        $datas = [
            'eale' => [
                'name' => '右视觉摄影机构',
                'url' => Yii::getAlias('@eale.cmsurl'),
                'urlMobile' => Yii::getAlias('@m.eale.cmsurl'),
            ],
            'ieale' => [
                'name' => '右视觉美学馆',
                'url' => Yii::getAlias('@ieale.cmsurl'),
                'urlMobile' => Yii::getAlias('@m.ieale.cmsurl'),
            ],
            'iealecn' => [
                'name' => '右视觉培训机构',
                'url' => Yii::getAlias('@iealecn.cmsurl'),
                'urlMobile' => Yii::getAlias('@m.iealecn.cmsurl'),
            ],
        ];
        return $datas;
    }

    public function getCurrentSiteInfo()
    {
        return $this->siteInfos[$this->siteCode];
    }

    public function getAdDatas($params)
    {
        $model = new Adpicture();
        $datas = $model->getInfos($params);
        return $datas;
    }

    public function getSampleTags()
    {
        $model = new Sample();
        return $model->getTagInfos();
    }

    public function getRelatedInfos($model)
    {
        $preInfo = $model->find()->select('id, name, thumb, created_at, sort')->where(['and', "sort='{$model->sort}'", ['<', 'created_at', $model->created_at]])->one();
        if (!empty($preInfo)) {
            $preInfo['thumb'] = $preInfo->getAttachmentUrl($preInfo['thumb']);
        }
        $nextInfo = $model->find()->select('id, name, thumb, created_at, sort')->where(['and', "sort='{$model->sort}'", ['>', 'created_at', $model->created_at]])->one();
        if (!empty($nextInfo)) {
            $nextInfo['thumb'] = $nextInfo->getAttachmentUrl($nextInfo['thumb']);
        }
        $rInfos = $model->getInfos(['sort' => $model->sort], 7);
        if (count($rInfos) < 7) {
            $ext = $model->getInfos([], 7);
            $rInfos = array_merge($rInfos, $ext);
        }
        $rInfoFormated = [];
        foreach ($rInfos as $key => $info) {
            if ($info['id'] != $model->id) {
                $rInfoFormated[] = $info;
            }
        }
        $datas = [
            'preInfo' => $preInfo,
            'nextInfo' => $nextInfo,
            'rInfos' => $rInfoFormated,
        ];
        return $datas;
    }
}
