<?php

namespace subsite\decoration\controllers;

use Yii;
use subsite\decoration\models\SignupForm;
use spread\models\Template;

class SpreadPageController extends Controller
{
	public $merchantInfo;
    public $copyStr;
    public $icpStr;

    public function init()
    {
        parent::init();

    }

    public function actionIndex()
    {
        $code = Yii::$app->request->get('tcode');
        $tInfos = $this->_getTemplateInfos();
        if (!in_array($code, array_keys($tInfos))) {
            return $this->redirect('/')->send();
        }
        $tInfo = $tInfos[$code];
        $model = new SignupForm();
		$cid = (int) Yii::$app->request->get('cid', 2);
        $merchantInfo = $model->merchantInfoPoint($cid);
        $this->merchantInfo = empty($merchantInfo) ? $model->merchantInfoByWhere(2) : $merchantInfo;

        $datas = [
            'code' => $code,
            'model' => $model,
        ];
        $this->layout = 'main';

        return $this->render($code, $datas);   
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
}
