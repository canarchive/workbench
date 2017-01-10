<?php
namespace gallerycms\components;

use Yii;

class BaseController extends Controller
{
    public $mHosts;

    public function init()
    {
        parent::init();
        $this->host = Yii::$app->request->hostInfo;

        $this->mHosts = Yii::$app->params['mHosts'];
        if (in_array($this->host, $this->mHosts)) {
            $this->isMobile = true;
        }

        if (isset($this->module->viewPath)) {
            $this->module->viewPath .= $this->isMobile ? '/mobile' : '/pc';
        }

		$this->pcMappingUrl = '/';
		$this->mobileMappingUrl = '/';
    }
}
