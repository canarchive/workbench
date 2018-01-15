<?php

namespace spread\decoration\controllers;

use Yii;
use spread\components\Controller;
use spread\decoration\models\SignupForm;

class DetailController extends Controller
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

    public function actionHome()
    {
        $_GET['cid'] = 1;
        $_GET['city_code'] = 'shanghai';
        $_GET['view'] = 'tbzsjlf';
        return $this->actionFeature();
    }

    public function actionHl()
    {
        $_GET['cid'] = 1;
        $_GET['city_code'] = 'beijing';
        $_GET['view'] = 'cjhlsj';
        return $this->actionFeature();
    }

    public function actionFeature()
    {
        $signupForm = new SignupForm();
		$this->cid = (int) Yii::$app->request->get('cid', 0);
        $datas = [
            'model' => $signupForm,
            'host' => $this->host,
        ];

        $view = Yii::$app->request->get('view');
        $params = require Yii::getAlias('@app') . '/config/params-decoration.php';
        $urlTypes = $params['spreadUrlTypes'];
        if (!in_array($view, array_keys($urlTypes))) {
            return $this->redirect('/')->send();
        }
        $viewInfo = $urlTypes[$view];
        $datas['view'] = $view;
        if (in_array($view, ['kaopu', 'shangjia'])) {
            $owner = new \merchant\house\models\Owner();
            $datas['ownerInfos'] = $owner->getInfos([], 20);
            if ($view == 'shangjia') {
                $where = ['city_code' => Yii::$app->params['currentCompany']['code_short'], 'status' => 1];
                $model = new \merchant\models\Merchant();
                $datas['infos'] = $model->getInfos($where);
            }
        }
        $this->layout = $viewInfo['main'];
        $this->_getCopyInfo();

        return $this->render($view, $datas);   
    }

    protected function getCache($key)
    {
        $infos = Yii::$app->cacheRedis->get($key);

        return $infos;
    }

    protected function setCache($key, $data)
    {
        Yii::$app->cacheRedis->set($key, $data);

        return ;
    }

    public function actionTsform()
    {
        $this->layout = false;
        return $this->render('tshd-bm');
    }

    public function actionJrform()
    {
        $this->layout = false;
        return $this->render('jr-bm');
    }

    public function _getCopyInfo()
    {
        $datas = require (Yii::getAlias('@spread/config/params-copy.php'));
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
