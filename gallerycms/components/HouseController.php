<?php
namespace gallerycms\components;

use Yii;
use yii\helpers\Url;

class HouseController extends BaseController
{
    public function init()
    {
        parent::init();
		$url = Yii::$app->request->url;
		$cityCode = isset($this->module->currentCityCode) ? $this->module->currentCityCode : null;
		$redirect = strpos($url, 'index.php') !== false ? true : false;
		//$redirect = empty($redirect) ? is_null($cityCode) && $url == '/' : $redirect;
		$redirect = empty($redirect) ? !is_null($cityCode) && $cityCode != Yii::$app->params['currentCompany']['code'] : $redirect;
		if ($redirect) {
			$this->_redirectRule();
		}
    }

	protected function _redirectRule()
	{
        $cityCode = Yii::$app->params['currentCompany']['code'];
        $url = "{$this->host}/{$cityCode}/";
        //header("Location:$url");
        return Yii::$app->response->redirect($url)->send();
        exit();
	}

	protected function _getOwnerInfos()
	{
		$cityCode = Yii::$app->params['currentCompany']['code'];
		$where = ['city_code' => $cityCode];
		$owner = new \merchant\house\models\Owner();
		$infos = $owner->getInfos($where, 20);

		return $infos;
	}
}
