<?php
namespace gallerycms\components;

use Yii;
use yii\helpers\Url;
use yii\web\ForbiddenHttpException;
use gallerycms\merchant\models\Merchant;

class BaseController extends Controller
{
    public $mHosts;
    public $clientType;
    public $layout = '@gallerycms/views/main-pc';
    public $currentCityCode;
    public $currentCityName;

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
        $this->currentCityCode = Yii::$app->params['currentCompany']['code'];
        $this->currentCityName = Yii::$app->params['currentCompany']['name'];
    }

    protected function _initMerchant($page = 'index')
    {
        $code = Yii::$app->request->get('mcode');
        if (empty($code)) {
            throw new ForbiddenHttpException('信息有误');
        }
        $datas = $this->_merchantDatas($code, $page);
        if (empty($datas)) {
            throw new ForbiddenHttpException('信息不存在');
        }
        if ($page != 'merchant-index') {
            $this->layout = '@gallerycms/views/layouts/main-plat';
        }

        return $datas;
    }

    protected function _merchantDatas($code, $page)
    {
        $model = new Merchant();
		$info = $model->getInfo(['code' => $code]);
		if (empty($info)) {
			return false;
		}

        $datas = [
            'info' => $info,
            'realcaseInfos' => $info->getRealcaseInfos(),
            'workingInfos' => $info->getWorkingInfos(),
            'designerInfos' => $info->getDesignerInfos(),
            'commentInfos' => $info->getCommentInfos(),
			'ownerInfos' => $info->getOwnerInfos(),
        ];
		//print_r($datas);exit();

		return $datas;
	}

    public function getNavDatas()
    {
        $datas = [
            'index' => [
                'url' => '/',
                'name' => '首页',
            ],
            'index-city' => [
                'url' => '/' . Yii::$app->params['currentCompany']['code'] . '/',
                'name' => '首页',
            ],
            'ask' => [
                'url' => '/ask/', 
                'name' => '装修问答'
            ],
            'merchant' => [
                'url' => '/' . Yii::$app->params['currentCompany']['code'] . '/merchant/',
                'name' => Yii::$app->params['currentCompany']['name'] . '装修公司',
            ],
            'quote' => [
                'url' => '/' . Yii::$app->params['currentCompany']['code'] . '/quote/',
                'name' => Yii::$app->params['currentCompany']['name'] . '装修报价',
            ],
            'sample' => [
                'url' => '/sample',
                'name' => '效果图',
            ],
            'office' => [
                'url' => 'http://www.weinaya.com',
                'name' => '商家系统',
            ],
        ];

        return $datas;
    }
}
