<?php
namespace gallerycms\components;

use Yii;

class BaseController extends Controller
{
    public function init()
    {
        parent::init();
        $this->host = Yii::$app->request->hostInfo;

        $mHosts = Yii::$app->params['mHosts'];
        if (in_array($this->host, $mHosts)) {
            $this->isMobile = true;
        }

        if (isset($this->module->viewPath)) {
            $this->module->viewPath .= $this->isMobile ? '/mobile' : '/pc';
        }
    }
}
