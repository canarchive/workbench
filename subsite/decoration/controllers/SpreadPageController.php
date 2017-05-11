<?php

namespace subsite\decoration\controllers;

use Yii;
use subsite\components\Controller;
use subsite\decoration\models\SignupForm;
use spread\models\saccount\Template;

class SpreadPageController extends Controller
{
    public $isMobile;
    public $mHost;
    public $host;
	public $cid;
    public $copyStr;
    public $icpStr;

    public function init()
    {
        parent::init();

        $this->isMobile = $this->clientIsMobile();
        $this->host = Yii::$app->request->hostInfo;
        $this->mHost = false;
        if (in_array($this->host, Yii::$app->params['mHosts'])) {
            $this->mHost = true;
        }
        Yii::$app->params['isMobile'] = $this->isMobile;
    }

    public function actionIndex()
    {
        $code = Yii::$app->request->get('tcode');
        $tInfos = $this->_getTemplateInfos();
        if (!in_array($code, array_keys($tInfos))) {
            return $this->redirect('/')->send();
        }
        $tInfo = $tInfos[$code];
        $signupForm = new SignupForm();
		$this->cid = (int) Yii::$app->request->get('cid', 0);
        $datas = [
            'code' => $code,
            'model' => $signupForm,
        ];

        $this->layout = empty($tInfo['main']) ? 'main' : $tInfo['main'];
        $this->_getCopyInfo();

        return $this->render($code, $datas);   
    }

    protected function _getTemplateInfos()
    {
        $model = new Template();
        $infos = $model->find(['status' => 1])->indexBy('code')->asArray()->all();
        return $infos;
    }

    public function _getCopyInfo()
    {
        $datas = require (Yii::getAlias('@subsite/config/params-copy.php'));
        foreach ($datas as $key => $value) {
            if (strpos($this->host, $key) !== false) {
                $this->copyStr = $value['copy'];
                $this->icpStr = $value['icp'];
                break; 
            }
        }
		$this->copyStr = empty($this->copyStr) ? $datas['weinaya']['copy'] : $this->copyStr;
		$this->icpStr = empty($this->icpStr) ? $datas['weinaya']['icp'] : $this->icpStr;
    }
}
