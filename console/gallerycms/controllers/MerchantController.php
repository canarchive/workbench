<?php

namespace console\gallerycms\controllers;

use Yii;
use yii\console\Controller;
use gallerycms\merchant\models\Merchant;
use common\models\Company;

class MerchantController extends Controller
{
    public function actionMerchant()
    {
        $cInfos = $this->getCompanyInfos();
        $cityCodes = array_keys($cInfos);
        $cityCode = $cityCodes[array_rand($cityCodes)];
        $model = new Merchant();
        $where = ['status' => 0, 'city_code' => $cityCode];
        $info = $model->find()->where($where)->orderBy(['orderlist' => SORT_DESC])->one();
        $info = $model->find()->where($where)->offset(0)->one();
        if (empty($info)) {
            return ;
        }

        $info->status = 1;
        $info->update(false);
        $info->addRelateInfos();
        var_dump($info);
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

    protected function getCompanyInfos()
    {
        $company = new Company();
        $datas = $company->getInfos(['status' => [2]]);
        return $datas;
    }
}
