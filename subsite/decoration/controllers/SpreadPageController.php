<?php

namespace subsite\decoration\controllers;

use Yii;
use subsite\decoration\models\SignupForm;
use spread\models\Template;

class SpreadPageController extends Controller
{
	public $merchantInfo;

    public function init()
    {
        parent::init();

    }

    public function actionBdztc()
    {
        $_GET['cid'] = Yii::$app->request->get('cid', 2);
        $_GET['city_code'] = Yii::$app->request->get('city_code', 'beijing');
        $_GET['tcode'] = 'tquote';
        return $this->actionIndex();
    }

    public function actionHome()
    {
        $_GET['cid'] = 2;
        $_GET['city_code'] = 'beijing';
        $_GET['tcode'] = 'home';

        return $this->actionIndex();
    }

    public function actionIndex()
    {
        $code = Yii::$app->request->get('tcode');
        $tInfos = $this->_getTemplateInfos();
        if (!in_array($code, array_keys($tInfos))) {
            $code = $this->formatOldCode($code);
        }
        if (!in_array($code, array_keys($tInfos))) {
            return $this->redirect('/')->send();
        }
        $tInfo = $tInfos[$code];
        $this->pagePosition = $code;
        $this->pagePositionName = $tInfo['name'];

        $code = $this->formatCode($code, $tInfo);
        $model = new SignupForm();
		$cid = (int) Yii::$app->request->get('cid', 2);
        $merchantInfo = $model->getPointInfo('merchant', $cid);
        $this->merchantInfo = empty($merchantInfo) ? $model->getPointInfo('merchant', 2) : $merchantInfo;
        //var_dump($this->merchantInfo);exit();

        $datas = [
            'code' => $code,
            'model' => $model,
        ];
        $this->layout = 'main';

        return $this->render($code, $datas);   
    }

    public function actionSiteRedirect()
    {
        $rdomain = Yii::$app->request->get('rdomain', '');
        $siteInfos = $this->siteInfos;
        $rdomain = in_array($rdomain, array_keys($siteInfos)) ? $rdomain : '';
        //echo $this->clientUrl;
        //print_r($this->siteInfos);exit();
        $clientType = $this->clientType == 'pc' ? 'pc' : 'm';
        $domain = $siteInfos[$rdomain]['domains'][$clientType];
        $clientUrl = str_replace("/sr-{$rdomain}", '', $this->clientUrl);
        $url = $domain . $clientUrl;
        $url .= strpos($url, '?') === false ? '?' : '';

        $urlPre = strval(Yii::$app->request->referrer);
        $url .= '&point_url_pre=' . $urlPre;
        header("Location:$url");
    }

    protected function getReturnUrl()
    {
        $default = [
            'returnUrl' => 'http://www.tu8zhang.com',
            'returnUrlMobile' => 'http://m.tu8zhang.com',
        ];
        $extInfos = require(Yii::getAlias('@subsite/config/decoration/merchant.php'));
        $extInfo = isset($extInfos[$this->merchantInfo['code']]) ? $extInfos[$this->merchantInfo['code']] : $default;
        $returnUrl = $this->clientType == 'pc' ? $extInfo['returnUrl'] : $extInfo['returnUrlMobile'];
        return $returnUrl;
    }

    protected function _getTemplateInfos()
    {
        $model = new Template();
        $infos = $model->find(['status' => 1])->indexBy('code')->asArray()->all();
        return $infos;
    }

    public function getNavUrls()
    {
        $domainCms = 'http://www.tu8zhang.com';
        $cityCode = Yii::$app->params['currentCompany']['code'];
        $urls = [
            'index' => $domainCms,
            'city' => $domainCms . '/' . $cityCode . '/',
            'sample' => $domainCms . '/sample/',
            'merchant' => $domainCms . '/' . $cityCode . '/merchant/',
            'ask' => $domainCms . '/ask_lm_gzsj/',
            'quote' => $domainCms . '/' . $cityCode . '/quote/',
            'desc' => $domainCms . '/desc.html',
            'guestbook' => $domainCms . '/guestbook.html',
            'friendlink' => $domainCms . '/friendlink.html',
            'statement' => $domainCms . '/statement.html',
            'contactus' => $domainCms . '/contactus.html',
        ];
        return $urls;
    }

    public function getOwnerInfos()
    {
        $names = ['王', '李', '孟', '石', '吕', '张', '赵', '刘', '黄', '胡', '王', '李', '张'];
        $nameSuffixs = ['先生', '女士', '小姐'];
        $mobiles = ['3', '4', '5', '8'];
        $owners = [];
        for ($i = 1; $i < 9; $i++) {
            $name = $names[array_rand($names)];
            $nameSuffix = $nameSuffixs[array_rand($nameSuffixs)];
            $mobile = '1' . $mobiles[array_rand($mobiles)] . '*****' . rand(1000, 9999);
            $owner = [
                'name' => $name . $nameSuffix,
                'area' => rand(80, 300),
                'minute' => rand(2, 30),
                'mobile' => $mobile,
            ];
            $owners[] = $owner;
        }
        return $owners;
    }

    protected function formatCode($code, $tInfo)
    {
        $clientType = $this->clientType;
        if ($clientType == 'pc') {
            $code = $tInfo['have_pc'] ? $code : 'designz';
        } else if ($clientType != 'pc') {
            $code = $tInfo['have_mobile'] ? $code : 'tquote';
        }
        return $code;
    }

    protected function formatOldCode($code)
    {
        $currentDate = date('Y-m-d');
        $channel = Yii::$app->request->get('qudao', '');
        $content = "{$code}-{$channel}-{$currentDate}\n";
        file_put_contents('/tmp/log-spreadold.txt', $content, FILE_APPEND);

        if ($code == 'jzsj') {
            return 'designn';
        }
        $tCodes = [
            'jzsj' => 'designz', 
            'tbj' => 'tquote', 
            'sj' => 'designn', 
            'nbj' => 'quoten', 
            'pcbj' => 'quote', 
            'bj' => 'quote'
        ];
        $codes = [
            'ypj', 'jjjz', 'aikj', 'op', 'jsy', 'md', 'fk', 'lzz', 'jinz', 'ldou', 'jkj', 'j50', 'dzr', 'yzf', 'jrzj', 'ts', 'yzw', 'mzk', 'tbz'
        ];

        $code = str_replace($codes, '', $code);
        $code = isset($tCodes[$code]) ? $tCodes[$code] : '';
        return $code;
    }
}
