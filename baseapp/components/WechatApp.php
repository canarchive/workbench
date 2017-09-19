<?php

namespace baseapp\components;

use yii;
use yii\base\Component;
use yii\base\InvalidConfigException;
use EasyWeChat\Foundation\Application;

class WechatApp extends Component
{
    public $config = [];

	public $userOptions = [];
	public $sessionParam = '_wechatUser';
	public $returnUrlParam = '_wechatReturnUrl';
	private static $_app;
	private static $_user;


	public function getApp()
	{
        if (!isset($this->config['app_id'], $this->config['app_secret'])) {
            throw new InvalidConfigException('Wechat 配置信息有误');
        }
		if(!self::$_app instanceof Application){
			self::$_app = new Application($this->config);
		}
		return self::$_app;
	}

	public function authorizeRequired()
	{
		if (Yii::$app->request->get('code')) {
			// callback and authorize
			return $this->authorize($this->app->oauth->user());
		} else {
			// redirect to wechat authorize page
			$this->setReturnUrl(Yii::$app->request->getUrl());
			return Yii::$app->response->redirect($this->app->oauth->redirect()->getTargetUrl());
		}
	}
	
	public function authorize(\Overtrue\Socialite\User $user)
	{
		Yii::$app->session->set($this->sessionParam, $user->toJSON());
		return Yii::$app->response->redirect($this->getReturnUrl());
	}

	public function userAuthorized()
	{
		//$hasSession = Yii::$app->session->has($this->sessionParam);
		$sessionVal = Yii::$app->session->get($this->sessionParam);
		return $sessionVal;
		//return ($hasSession && !empty($sessionVal));
	}

	public function setReturnUrl($url)
	{
		Yii::$app->session->set($this->returnUrlParam, $url);
	}

	public function getReturnUrl($defaultUrl = null)
	{
		$url = Yii::$app->getSession()->get($this->returnUrlParam, $defaultUrl);
		if (is_array($url)) {
			if (isset($url[0])) {
				return Yii::$app->getUrlManager()->createUrl($url);
			} else {
				$url = null;
			}
		}
		return $url === null ? Yii::$app->getHomeUrl() : $url;
	}

	public function getUser()
	{
		if(!$this->isAuthorized()) {
			return new WechatUser();
		}
		if(! self::$_user instanceof WechatUser) {
			$userInfo = Yii::$app->session->get($this->sessionParam);
			$config = $userInfo ? json_decode($userInfo, true) : [];
			self::$_user = new WechatUser($config);
		}
		return self::$_user;
	}

	public function __get($name)
	{
		try {
			return parent::__get($name);
		}catch (\Exception $e) {
			if($this->getApp()->$name) {
				return $this->app->$name;
			}else{
				throw $e->getPrevious();
			}
		}
	}

	public function getIsWechat()
	{
		return strpos($_SERVER["HTTP_USER_AGENT"], "MicroMessenger") !== false;
	}
}
