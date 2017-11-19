<?php
namespace common\components;

use Yii;
use yii\web\Controller as YiiController;

class Controller extends YiiController
{
	use ControllerWechatTrait;

    public $host;
    public $isMobile;
    public $clientType;
    public $clientUrl;
	public $pcMappingUrl;
	public $mobileMappingUrl;
    public $pagePosition = 'default';
    public $pagePositionName = 'default';

    public $siteCode;
    public $currentSiteInfo;
    public $currentPage;
    public $currentElem;
    public $menuInfos = [];

	public $wechatInfo;

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'common\components\ErrorAction',
                'view' => '@common/views/common/error',
            ],
			'captcha' => [
				'class' => 'common\components\CaptchaAction',
				'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
			],
        ];
    }

    public function init()
    {
        parent::init();

        $this->host = Yii::$app->request->hostInfo;
        $this->clientUrl = $url = Yii::$app->request->url;
        if (strpos($url, '.html') === false && strpos($url, '.xml') === false && strpos($url, '.asp') === false) {
            $pos = strpos($this->clientUrl, '?');
            $query = $pos !== false ? substr($url, $pos) : '';
            $urlBase = str_replace($query, '', $url);
			$lastChar = substr($urlBase, -1);
            if ($lastChar != '/') {
                $rUrl = "{$this->host}{$urlBase}/{$query}";
                //header("Location: {$url}");
                return Yii::$app->response->redirect($rUrl, 301)->send();
                exit();
            }
        }
        if (strpos($this->clientUrl, 'index.php') !== false) {
            return Yii::$app->response->redirect($this->host)->send();
            exit();
        }

        $this->isMobile = $this->clientIsMobile();
        $this->initSiteInfo();
        $this->module->viewPath .= is_null($this->clientType) ? '' : ($this->clientType == 'mobile' ? '/mobile' : '/pc');
    }

	protected function initSiteInfo()
	{
		if (empty($this->siteInfos)) {
			return ;
		}
        foreach ($this->siteInfos as $siteCode => $info) {
			if (!empty($this->siteCode)) {
				break;
			}
			if (!isset($info['domains'])) {
				continue;
			}
			foreach ($info['domains'] as $clientType => $domain) {
                if ($domain == $this->host) {
                    $this->clientType = empty($clientType) ? null : ($clientType == 'pc' ? 'pc' : 'mobile');
                    $this->siteCode = $siteCode;
					break;
				}
            }
        }
		if (!isset($this->siteInfos[$this->siteCode])) {
			return ;
		}

        $this->currentSiteInfo = $this->siteInfos[$this->siteCode];
		if (is_null($this->clientType)) {
			return ;
		}
		$this->pcMappingUrl = $this->currentSiteInfo['domains']['pc'] . $this->clientUrl;
		$this->mobileMappingUrl = $this->currentSiteInfo['domains']['m'] . $this->clientUrl;
		return ;
	}

	protected function getSiteInfos()
	{
        $file = Yii::getAlias('@app') . "/config/params-site.php";
        $datas = file_exists($file) ? require($file) : [];
        return $datas;
	}

    /**
     * 获取当前客户端类型；目前只区分PC、移动端
     *
     * @return boolean
     */
    protected function clientIsMobile()
    {
        // 通过GET参数，强制设置客户端为移动端，方便调试
        $forceMobile = Yii::$app->getRequest()->get('force_mobile');
        if ($forceMobile) {
            Yii::$app->params['clientIsMobile'] = $forceMobile;
            return $forceMobile;
        }

        //return false;
        $detect = new \Mobile_Detect;
        $isMobile = $detect->isMobile();
        Yii::$app->params['clientIsMobile'] = $isMobile;

        return $isMobile;
    }

    /**
     * 针对渠道推广的请求，记录相关信息，以供后续针对渠道进行统计
     *
     * @param object $action 等前事件对象
     * @return bool
     */
    public function beforeAction($action)
    {
        Yii::$app->params['statUrl'] = '';
        $channelSpread = Yii::$app->request->get('qudao');
        $cityCode = Yii::$app->request->get('city_code', '');
        if (!empty($channelSpread)) {
            $pUrlPre = Yii::$app->request->get('point_url_pre', '');
            $urlPre = !empty($pUrlPre) ? $pUrlPre : strval(Yii::$app->request->referrer);
            $queryStr = '';
            if ($channelSpread == 'bdztc') {
                if (!isset($_GET['cid'])) {
                    $queryStr = '&cid=2';
                }
                $cityCode = empty($cityCode) ? 'beijing' : $cityCode;
            }
            $statUrl = '/stat.html?' . Yii::$app->request->queryString . $queryStr . '&city_code=' . $cityCode . '&url_pre=' . $urlPre;
            //echo $statUrl;exit();
            Yii::$app->params['statUrl'] = "<script type='text/javascript' src='{$statUrl}'></script>";
        } else if (!empty($cityCode)) {
            $session = Yii::$app->session;
            $session['session_city_code'] = $cityCode;
        }

        return parent::beforeAction($action);
    }

    protected function _statistic($data)
    {
        $channel = Yii::$app->getRequest()->get('qudao');
        $method = Yii::$app->getRequest()->method;
        if ($channel && $method == 'GET') {
            $isMobile = $this->clientIsMobile();
            $data['client_type'] = $isMobile ? 'h5' : 'pc';
            $model = new \baseapp\statistic\models\Visit();
            $model->writeVisitLog($data);
        }
        //echo json_encode([]);//Yii::getAlias('@asseturl') . '/common/images/blank.gif';

        return ;
    }

	protected function getPointModel($code, $forceNew = false)
	{
		static $models = [];
		$modelClass = $this->getPointClass($code);
		if (isset($models[$modelClass]) && empty($forceNew)) {
			return $models[$modelClass];
		}
		$model = $models[$modelClass] = new $modelClass();
		return $model;
	}

	protected function getPointClass($code)
	{
		return $code;
	}
}
