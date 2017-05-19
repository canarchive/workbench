<?php

namespace subsite\decoration\controllers;

use Yii;
use subsite\components\Controller;
use subsite\decoration\models\SignupForm;
use spread\models\saccount\Template;

class SpreadPageController extends Controller
{
    public $mHost;
	public $cid;
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
        $signupForm = new SignupForm();
		$this->cid = (int) Yii::$app->request->get('cid', 0);
        $datas = [
            'code' => $code,
            'model' => $signupForm,
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
}
