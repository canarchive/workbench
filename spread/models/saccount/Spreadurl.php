<?php

namespace spread\models\saccount;

use Yii;
use yii\helpers\ArrayHelper;
use common\models\Company;
use spread\models\Visit;

class Spreadurl extends BaseModel
{
    public $inputParams; 

    public static function tableName()
    {
        return '{{%visit}}';
    }

    public function createDatas()
    {
        $searchDatas = $this->getSearchDatas();
    }

    public function getSearchDatas()
    {
        $datas = [
            'companyInfos' => $this->companyInfos,
            'domainInfos' => $this->domainInfos,
            'templateInfos' => $this->templateInfos,
            'channelInfos' => $this->channelInfos,
    }

    public function getUrlOfSpread($params, $isPc = true)
    {
        print_r($params);exit();

        $url = 'abc';
        return $url;
    }

    public function getAccountInfos()
    {
        $infos = ArrayHelper::map(Account::find()->select('id, name')->all(), 'id', 'name');
        return $infos;
    }

    public function getPlanInfos()
    {
        $infos = ArrayHelper::map(Plan::find()->select('id, name')->all(), 'id', 'name');
        return $infos;
    }

    public function getTemplateInfos()
    {
        $infos = ArrayHelper::map(Template::find()->select('code, name')->all(), 'code', 'name');
        return $infos;
    }

    public function getDomainInfos()
    {
        $infos = ArrayHelper::map(Domain::find()->select('code, name')->all(), 'code', 'name');
        return $infos;
    }

    public function getCompanyInfos()
    {
        $company = new Company();
        $companyInfos = $company->getInfos(['status' => 2], 'code');
        $cInfos = ArrayHelper::map($companyInfos, 'code', 'name');
        return $cInfos;
    }

    public function getAttributeParams()
    {
        $model = new Visit();
        return $model->attributeParams;
    }
}
