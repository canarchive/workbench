<?php
namespace common\components;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller as YiiController;

class Controller extends YiiController
{
    public $host;
    public $isMobile;
    public $clientType;
    public $clientUrl;
	public $pcMappingUrl;
	public $mobileMappingUrl;
    public $pagePosition = 'default';
    public $pagePositionName = 'default';

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
        ];
    }

    public function init()
    {
        parent::init();

        $this->host = Yii::$app->request->hostInfo;
        $this->clientUrl = Yii::$app->request->url;
        if (strpos($this->clientUrl, 'index.php') !== false) {
            return Yii::$app->response->redirect($this->host)->send();
            exit();
        }

        $this->isMobile = $this->clientIsMobile();
        $this->initClientType();
        $this->module->viewPath .= is_null($this->clientType) ? '' : ($this->clientType == 'mobile' ? '/mobile' : '/pc');
    }

    protected function initClientType()
    {
        return null;
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
        if (!empty($channelSpread)) {
            $urlPre = strval(Yii::$app->request->referrer);
            $cityCode = Yii::$app->request->get('city_code', '');
            $statUrl = Yii::getAlias('@spreadurl') . '/stat.html?' . Yii::$app->request->queryString . '&city_code=' . $cityCode . '&url_pre=' . $urlPre;
            //echo $statUrl;exit();
            Yii::$app->params['statUrl'] = "<script type='text/javascript' src='{$statUrl}'></script>";
        }

        return parent::beforeAction($action);
    }
}
