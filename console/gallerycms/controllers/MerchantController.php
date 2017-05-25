<?php

namespace console\gallerycms\controllers;

use Yii;
use yii\console\Controller;
use gallerycms\merchant\models\Merchant;
use gallerycms\house\models\QuoteUpdate;
use common\models\Company;

class MerchantController extends Controller
{
	public function actionQuote()
	{
		$model = new QuoteUpdate();
        $cInfos = $this->getCompanyInfos(['status' => [1, 2, 99]]);
		foreach ($cInfos as $cInfo) {
			$cityCode = $cInfo['code'];
			$model->quoteUpdate($cityCode);
		}
	}

    public function actionMerchant()
    {
        $cInfos = $this->getCompanyInfos(['status' => [1]]);
        $cityCodes = array_keys($cInfos);
        $cityCode = $cityCodes[array_rand($cityCodes)];
        $model = new Merchant();
        $where = ['status' => 0, 'city_code' => $cityCode];
        $info = $model->find()->where($where)->orderBy(['orderlist' => SORT_DESC])->one();
        //$info = $model->find()->where($where)->offset(0)->one();
        if (empty($info)) {
            return ;
        }

        $info->status = 1;
        $info->update(false);
        $info->addRelateInfos();
        //var_dump($info);exit();
    }

    public function actionUpdateInfo()
    {
        $model = new Merchant();
        $mInfo = $model->db->createCommand("SELECT id FROM wm_merchant WHERE status = 1 order by rand() LIMIT 1")->queryOne();
        $mInfo = $model->findOne($mInfo['id']);
        $mInfo->addRelateInfos(1);
    }

    public function actionUpdateQuote()
    {
        $data = $this->baseInfo('quote');

        if ($data['hit'] === 0) {
            $model = new Quote();
            $model->updateInfo($data['num']);
        }
    }

    protected function getCompanyInfos($where)
    {
        $company = new Company();
        $datas = $company->getInfos($where);
        return $datas;
    }
}
