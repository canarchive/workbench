<?php
namespace gallerycms\components;

use Yii;
use yii\helpers\Url;
use yii\web\ForbiddenHttpException;
use gallerycms\merchant\models\Merchant;
use gallerycms\house\models\Friendlink;
use gallerycms\house\models\AskQuestion;
use gallerycms\house\models\Quote;

class BaseController extends Controller
{
    public $mHosts;
    public $clientType;
    public $layout = '@gallerycms/views/main-pc';
    public $currentCityCode;
    public $currentCityName;
	public $footerStatStr;
    public $mDatas;

    public function init()
    {
        parent::init();
        $this->host = Yii::$app->request->hostInfo;

        $this->isMobile = $this->clientIsMobile();
        $this->mHosts = Yii::$app->params['mHosts'];
        if (in_array($this->host, $this->mHosts)) {
            $this->clientType = 'mobile';
            //$this->isMobile = true;
        }

        if (isset($this->module->viewPath)) {
            $this->module->viewPath .= $this->clientType == 'mobile' ? '/mobile' : '/pc';
        }

		$this->pcMappingUrl = Yii::getAlias('@gallerycmsurl') . Yii::$app->request->url;
		$this->mobileMappingUrl = Yii::getAlias('@m.gallerycmsurl') . Yii::$app->request->url;
        $this->currentCityCode = Yii::$app->params['currentCompany']['code'];
        $this->currentCityName = Yii::$app->params['currentCompany']['name'];
		$this->footerStatStr = $this->_setStatStr();
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
        if ($this->clientType == 'mobile') {
            $this->layout = '@gallerycms/views/main-mobile';
        } else {
            if ($page != 'merchant-index') {
                $this->layout = '@gallerycms/views/layouts/main-plat';
            }
        }
        Yii::$app->params['currentCompanyInfo'] = $datas['info'];
        $this->currentCityCode = $datas['info']['city_code'];
        $this->currentCityName = Yii::$app->params['companyInfos'][$datas['info']['city_code']]['name'];
        
        $datas = array_merge($datas, $this->_commonDatas());
        $this->mDatas = $datas;
        return $datas;
    }

    protected function _commonDatas()
    {
        $qModel = new Quote();
        $aModel = new AskQuestion();
        $mModel = new Merchant();
        $where = ['status' => 1, 'city_code' => $this->currentCityCode];
        $datas['quoteInfos'] = $qModel->getInfos($where, 20);
        $datas['askInfos'] = $aModel->getInfos([], 20);
        $datas['merchantInfos'] = $mModel->getInfos($where, 20);
        $datas['merchantRelateInfos'] = $mModel->getInfos(['status' => 1], 20);
        $this->mDatas = $datas;
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
                'url' => '/ask_lm_gzsj/', 
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
                'url' => '/sample/',
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
                'url' => Yii::getAlias('@gallerycmsurl') . '/desc.html',
                'name' => '关于我们',
            ],
            'contactus' => [
                'url' => Yii::getAlias('@gallerycmsurl') . '/contactus.html',
                'name' => '联系我们',
            ],
            'friendlink' => [
                'url' => Yii::getAlias('@gallerycmsurl') . '/friendlink.html',
                'name' => '友情链接',
            ],
            'guestbook' => [
                'url' => Yii::getAlias('@gallerycmsurl') . '/guestbook.html',
                'name' => '意见反馈',
            ],
            'statement' => [
                'url' => Yii::getAlias('@gallerycmsurl') . '/statement.html',
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

	protected function _setStatStr()
	{
		if ($this->isMobile) {
return 
"<script>
(function(){
    var bp = document.createElement('script');
    var curProtocol = window.location.protocol.split(':')[0];
    if (curProtocol === 'https') {
        bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';        
    }
    else {
        bp.src = 'http://push.zhanzhang.baidu.com/push.js';
    }
    var s = document.getElementsByTagName(\"script\")[0];
    s.parentNode.insertBefore(bp, s);
})();
</script>
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement(\"script\");
  hm.src = \"https://hm.baidu.com/hm.js?388a8f6628dcd988e1a5b060ae421e7a\";
  var s = document.getElementsByTagName(\"script\")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
";
		} else {
return 
"
<script>
(function(){
    var bp = document.createElement('script');
    var curProtocol = window.location.protocol.split(':')[0];
    if (curProtocol === 'https') {
        bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';        
    }
    else {
        bp.src = 'http://push.zhanzhang.baidu.com/push.js';
    }
    var s = document.getElementsByTagName(\"script\")[0];
    s.parentNode.insertBefore(bp, s);
})();
</script>
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement(\"script\");
  hm.src = \"https://hm.baidu.com/hm.js?9ca262cf1b353283e75c91d98d96e598\";
  var s = document.getElementsByTagName(\"script\")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
";
		}

	}
}
