<?php
namespace common\components;

use Yii;
use yii\base\InvalidConfigException;
use yii\helpers\Json;
use baseapp\components\WechatApp;
use third\models\Wechat;

trait ControllerWechatTrait
{
	public $wechatJs;
	public $wechatShareInfo;

	public function formatWechatJs($code = null)
	{
		$wechatApp = $this->getWechatApp($code);
		$this->wechatJs = $wechatApp->app->js;
		$this->initShareInfo();
	}

	public function initShareInfo($info = [])
	{
		$data = [
			'record_type' => isset($info['record_type']) ? $info['record_type'] : '',
			'record_id' => isset($info['record_type']) ? $info['record_id'] : '',
			'title' => isset($info['title']) && !empty($info['title']) ? $info['title'] : Yii::$app->params['siteName'],
			'desc' => isset($info['desc']) ? $info['desc'] : Yii::$app->params['siteDesc'],
			'link' => isset($info['link']) && !empty($info['link']) ? $info['link'] : Yii::getAlias('@web'),
			'imgUrl' => isset($info['imgUrl']) && !empty($info['imgUrl']) ? $info['imgUrl'] : Yii::$app->params['siteLogo'],
            // 分享类型,music、video或link，不填默认为link  
			'type' => isset($info['type']) ? $info['type'] : '',
            // 如果type是music或video，则要提供数据链接，默认为空  
			'dataUrl' => isset($info['dataUrl']) ? $info['dataUrl'] : '',
		];
		$queryStr = http_build_query($data);
		$data['queryStr'] = $queryStr;
		
		$this->wechatShareInfo = Json::encode($data);
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
