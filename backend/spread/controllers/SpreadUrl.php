<?php

namespace backend\spread\controllers;

use Yii;
use yii\helpers\ArrayHelper;
use backend\components\AdminController;
use common\models\Company;
use spread\models\Visit;
use merchant\models\Merchant;

class SpreadUrl extends AdminController
{
    protected $modelClass = '';//gallerycms\models\HouseTdk';

    public function actionListinfo()
    {
        $merchant = new Merchant();
		$merchantInfos = $merchant->find()->select('id, name')->indexBy('id')->all();
        $mInfos = ArrayHelper::map($merchantInfos, 'id', 'name');
        $merchantId = Yii::$app->request->get('merchant_id');
        $merchantId = empty($merchantId) ? 0 : $merchantId;

        $company = new Company();
        $companyInfos = $company->getInfos(['status' => 2], 'code');
        $cInfos = ArrayHelper::map($companyInfos, 'code', 'name');
        $cityCode = Yii::$app->request->get('city_code');
        $cityCode = empty($cityCode) ? 'beijing' : $cityCode;
        $domainKey = Yii::$app->request->get('domain_key', '');
        $domainRedirect = Yii::$app->request->get('domain_redirect');
		$domainRedirect = $domainRedirect == 'no' ? null : $domainRedirect;
        $showFull = Yii::$app->request->get('show_full', 0);

        $visitClass = $this->visitClass;
        $model = new $visitClass();
        $channelInfos = $model->channelInfos;
        $channel = Yii::$app->request->get('channel');
        $channel = in_array($channel, array_keys($channelInfos)) ? $channel : 'bd';
        $channelInfo = Yii::$app->request->get('channel_info');
        $channelInfo = !empty($channelInfo) ? $channelInfo : 'bedsem';
        $params = $this->getParams();
        $urlTypes = $params['spreadUrlTypes'];
        $hostKeys = $params['hostKeys'];
        $datas = [
            'showFull' => $showFull,
            'model' => $model,
            'mInfos' => $mInfos,
            'merchantId' => $merchantId,
            'merchantName' => $merchantId > 0 ? $mInfos[$merchantId] : '',
            'cInfos' => $cInfos,
            'cityCode' => $cityCode,
            'cityName' => $cInfos[$cityCode],
            'channelInfos' => $channelInfos,
            'channel' => $channel,
            'channelInfo' => $channelInfo,
            'hostKeys' => $hostKeys,
            'urlTypes' => $urlTypes,
            'pcDomain' => Yii::getAlias("@{$domainKey}spreadurl"),
            'mobileDomain' => Yii::getAlias("@m.{$domainKey}spreadurl"),
			'domainRedirect' => $domainRedirect,
            'pcDomainRedirect' => is_null($domainRedirect) ? '' : Yii::getAlias("@{$domainRedirect}spreadurl"),
            'mobileDomainRedirect' => is_null($domainRedirect) ? '' : Yii::getAlias("@m.{$domainRedirect}spreadurl"),
        ];

        return $this->render('/spread-url/listinfo', $datas);
    }
}
