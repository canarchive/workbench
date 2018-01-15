<?php
namespace gallerycms\components;

use Yii;
use yii\helpers\Url;
use gallerycms\shoot\models\Friendlink;
use gallerycms\shoot\models\Site;
use gallerycms\shoot\models\Sort;
use gallerycms\shoot\models\Adpicture;

class ShootController extends Controller
{
    public $siteCode;
    public $currentSiteInfo;
    public $currentPage;
    public $clientType;
    public $currentSortInfos;
    public $currentElem;
    public $currentSubElem;

    public function init()
    {
        parent::init();

        $host = Yii::$app->request->hostInfo;
        foreach ($this->siteInfos as $siteCode => $info) {
            if (empty($this->siteCode) && $info['domain'] == $host) {
                $this->clientType = 'pc';
                $this->siteCode = $siteCode;
            }
            if (empty($this->siteCode) && $info['domain_mobile'] == $host) {
                $this->clientType = 'mobile';
                $this->siteCode = $siteCode;
            }
        }

        $this->host = $host;
        $this->currentSiteInfo = $this->siteInfos[$this->siteCode];
        $this->currentSortInfos = $this->sortInfos[$this->siteCode];
        Yii::$app->params['siteName'] = $this->currentSiteInfo['name'];
        Yii::$app->params['siteNameBase'] = $this->currentSiteInfo['name'];
        //Yii::$app->params['siteQQ'] = '3326992864';
        Yii::$app->params['siteQQ'] = '2593003545';
        //Yii::$app->params['siteCopyRightInfo'] = "Coptyright&nbsp;&copy;&nbsp;2009-2017&nbsp;{$this->currentSiteInfo['domain']},All&nbsp;rights&nbsp;reserved.&nbsp;";
        Yii::$app->params['siteIcpInfo'] = $this->currentSiteInfo['icp'];
        $this->clientType == 'mobile' ? true : false;
        $this->isMobile = $this->clientIsMobile();
        if (isset($this->module->viewPath)) {
            $this->module->viewPath .= $this->clientType == 'mobile' ? '/hulian/mobile' : '/hulian/pc';
        }
		$this->pcMappingUrl = $this->currentSiteInfo['domain'] . Yii::$app->request->url;
		$this->mobileMappingUrl = $this->currentSiteInfo['domain_mobile'] . Yii::$app->request->url;
    }

	protected function _redirectRule()
	{
        header("Location:/");
        //return Yii::$app->response->redirect($url)->send();
        exit();
	}

    protected function _getTdkInfos()
    {
        $fileTdk = Yii::getAlias('@gallerycms') . "/config/shoot/tdk-{$this->siteCode}.php";
        $tdkInfos = require($fileTdk);
        return $tdkInfos;
    }

    public function getFriendLinkInfos($where = [])
    {
        $model = new Friendlink();
        $infos = $model->find()->where($where)->orderBy(['orderlist' => SORT_DESC])->limit(100)->asArray()->all();
        return $infos;
    }

    protected function getCategoryInfos()
    {
        $datas = Category::find()->indexBy('code')->orderBy(['orderlist' => SORT_DESC])->all();

        return $datas;
    }

    public function getNavDatas()
    {
        $datas = [
            'index' => [
                'url' => '/',
                'name' => '首页',
            ],
            'case' => [
                'url' => '/case/',
                'name' => '摄影作品',
                'subDatas' => [],
            ],
        ];
        foreach ($this->currentSortInfos as $sort => $sInfo) {
            if (empty($sort)) {
                continue;
            }
            $datas['case']['subDatas'][$sort] = [
                'url' => "/case_{$sort}/",
                'name' => $sInfo['name'],
            ];
        }
        $datas['flow'] = ['url' => '/flow.html', 'name' => '拍摄流程'];
        $datas['guarantee'] = ['url' => '/guarantee.html', 'name' => '服务保障'];
        $datas['aboutus'] = ['url' => '/aboutus.html', 'name' => '关于我们'];
        $datas['contactus'] = ['url' => '/contactus.html', 'name' => '联系我们'];

        return $datas;
    }

    public function getRelatedInfos($model)
    {
        $preInfo = $model->find()->select('id, name, created_at, sort')->where(['and', "sort='{$model->sort}'", ['<', 'created_at', $model->created_at]])->orderBy('id DESC')->one();
        $nextInfo = $model->find()->select('id, name, created_at, sort')->where(['and', "sort='{$model->sort}'", ['>', 'created_at', $model->created_at]])->one();
        $params = [
            'where' => ['site_code' => $this->siteCode, 'sort' => $model->sort],
            'limit' => 5
        ];
        $rInfos = $model->getInfos($params);
        if (count($rInfos) < 5) {
            $params = [
                'where' => ['site_code' => $this->siteCode],
                'limit' => 5 - count($rInfos),
            ];
            $ext = $model->getInfos($params);
            $rInfos = array_merge($rInfos, $ext);
        }
        $rInfoFormated = [];
        $i = 1;
        foreach ($rInfos as $key => $info) {
            if ($info['id'] != $model->id && $i < 5) {
                $rInfoFormated[] = $info;
                $i++;
            }
        }
        $datas = [
            'preInfo' => $preInfo,
            'nextInfo' => $nextInfo,
            'rInfos' => $rInfoFormated,
        ];
        return $datas;
    }

    public function getAdDatas($params)
    {
        $model = new Adpicture();
        $where = array_merge(['status' => 1], $params);
        $datas = $model->getInfos(['where' => $where]);
        return $datas;
    }

    protected function getSiteInfos()
    {
        $infos = Site::find()->indexBy('code')->all();
        return $infos;
    }

    protected function getSortInfos()
    {
        $infos = Sort::find()->orderBy(['orderlist' => SORT_DESC])->all();
        $datas = [];
        foreach ($infos as $info) {
            $datas[$info['site_code']][$info['code']] = $info;
        }

        return $datas;
    }
}
