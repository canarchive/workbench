<?php
namespace gallerycms\components;

use Yii;
use yii\helpers\Url;
use yii\web\ForbiddenHttpException;
use gallerycms\merchant\models\Merchant;
use gallerycms\house\models\Friendlink;

class BaseController extends Controller
{
    public $mHosts;
    public $clientType;
    public $layout = '@gallerycms/views/main-pc';
    public $currentCityCode;
    public $currentCityName;
    public $mDatas;

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

    protected function _initMerchant($page = 'merchant-index')
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

    public function getFooterNavs()
    {
        $datas = [
            'desc' => [
                'url' => '/desc.html',
                'name' => '关于我们',
            ],
            'contactus' => [
                'url' => '/contactus.html',
                'name' => '联系我们',
            ],
            'friendlink' => [
                'url' => '/friendlink.html',
                'name' => '友情链接',
            ],
            'guestbook' => [
                'url' => '/guestbook.html',
                'name' => '意见反馈',
            ],
            'statement' => [
                'url' => '/statement.html',
                'name' => '法律声明',
            ],
            'disclaimer' => '免责声明：本网站部分内容由用户自行上传，如权利人发现存在误传其作品情形，请及时与本站联系。',
            'copyRight' => Yii::$app->params['siteCopyRightInfo'],
            'icpInfo' => Yii::$app->params['siteIcpInfo'],
            'hotline' => Yii::$app->params['siteHotline'],
        ];

        return $datas;
    }

    public function getFriendLinkInfos($where = [])
    {
        $model = new Friendlink();
        $infos = $model->find()->where($where)->orderBy(['orderlist' => SORT_DESC])->limit(100)->asArray()->all();
        return $infos;
    }
}
