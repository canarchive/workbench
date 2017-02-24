<?php

namespace common\components;

use Yii;
use yii\helpers\Url;
use common\models\Company;

class ModuleBase extends \yii\base\Module
{
    /**
     * @inheritdoc
     */
    public $defaultRoute = '';
    public $currentCityCode;
    public $cityCodeValid = true;

    public function init()
    {
        parent::init();
        $this->layout = 'main';
    }

    protected function getCompanyInfos()
    {
        static $datas = null;
        if (is_null($datas)) {
            $company = new Company();
            $datas = $company->getInfos(['status' => [2]]);
        }

        return $datas;
    }

    protected function getCurrentCompany()
    {
        $code = $this->currentCityCode = Yii::$app->request->get('city_code');
        $session = Yii::$app->session;
        //$session['current_company'] = [];
        $currentCompany = isset($session['current_company']) ? $session['current_company'] : [];
        $currentCode = isset($currentCompany['code']) ? $currentCompany['code'] : '';
        if (!empty($currentCode) && (is_null($code) || $currentCode == $code)) {
            return $currentCompany;
        }

        $company = new Company();
        if (is_null($code)) {
            $info = $company->getInfoByIP();
            $session['current_company'] = $info;
            return $info;
        }

        $info = $company->getInfoByCode($code);
        if (empty($info)) {
            $this->cityCodeValid = false;
            $info = $company->getInfoByIP();
        }
        $session['current_company'] = $info;
        return $info;
    }
}
