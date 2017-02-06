<?php
namespace gallerycms\components;

use Yii;
use yii\helpers\Url;
use yii\web\ForbiddenHttpException;
use gallerycms\merchant\models\Merchant;

class BaseController extends Controller
{
    public $mHosts;
    public $clientType;
    public $layout = '@gallerycms/views/main-pc';
    public $currentCityCode;

    public function init()
    {
        parent::init();
        $this->host = Yii::$app->request->hostInfo;

        $this->isMobile = $this->clientIsMobile();
        $this->mHosts = Yii::$app->params['mHosts'];
        if (in_array($this->host, $this->mHosts)) {
            $this->clientType = 'mobile';
            $this->isMobile = true;
        }

        if (isset($this->module->viewPath)) {
            $this->module->viewPath .= $this->clientType ? '/mobile' : '/pc';
        }

		$this->pcMappingUrl = '/';
		$this->mobileMappingUrl = '/';
        $this->currentCityCode = Yii::$app->params['currentCompany']['code'];
    }

    protected function _initMerchant($page = 'index')
    {
        $code = Yii::$app->request->get('mcode');
        if (empty($code)) {
            throw new ForbiddenHttpException('信息有误');
        }
        $datas = $this->_merchantDatas($code, $page);
        if (empty($datas)) {
            throw new ForbiddenHttpException('信息不存在');
        }
        if ($page != 'merchant-index') {
            $this->layout = '@gallerycms/views/layouts/main-plat';
        }

        return $datas;
    }

    protected function _merchantDatas($code, $page)
    {
        $model = new Merchant();
		$info = $model->getInfo(['code' => $code]);
		if (empty($info)) {
			return false;
		}

        $datas = [
            'info' => $info,
            'realcaseInfos' => $info->getRealcaseInfos(),
            'workingInfos' => $info->getWorkingInfos(),
            'designerInfos' => $info->getDesignerInfos(),
            'commentInfos' => $info->getCommentInfos(),
			'ownerInfos' => $info->getOwnerInfos(),
        ];
		//print_r($datas);exit();

		return $datas;
	}
}
