<?php
namespace common\components;

use Yii;
use yii\base\InvalidConfigException;
use baseapp\components\WechatApp;
use third\models\Wechat;

trait ControllerTrait
{
	public $wechatJs;

	public function formatWechatJs($code = null)
	{
		$wechatApp = $this->getWechatApp($code);
		$this->wechatJs = $wechatApp->app->js;
	}

	public function getWechatApp($code = null)
	{
		static $wechats;

		$code = is_null($code) ? Yii::$app->request->get('wcode', '') : $code;
		if (empty($code)) {
			throw new InvalidConfigException('Wechat code 不能为空');
			//return ['status' => 400, 'message' => 'Wechat code 不能为空'];
		}

		if (isset($wechats[$code])) {
			return $wechats[$code];
		}

		$model = new Wechat();
		$info = $model->getInfo(['code' => $code]);
		if (empty($info['status'])) {
			throw new InvalidConfigException('Wechat code 不能为空');
			//return ['status' => 400, 'message' => "Wechat '{$code}' 不可用"];
		}
		$info = $info->toArray();
        /*$info['oauth'] = [
            'scopes' => ['snsapi_login'],
            'callback' => '/abcde',
		];*/

		$info['secret'] = $info['app_secret'];
		$wechat = new WechatApp();
		$wechat->config = $info;
		$wechats[$code] = $wechat;
		return $wechat;
	}
}
