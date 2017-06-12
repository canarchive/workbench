<?php
namespace subsite\decoration\models;

use common\models\BaseModel;
use common\models\QuoteHouse;
use baseapp\merchant\models\SignupFormTrait;

class SignupForm extends BaseModel
{
    use SignupFormTrait;

    public function init()
    {
        parent::init();
        $this->inputFieldExts = ['area_input', 'city_input'];
        $this->_intFields = array_merge($this->_intFields, ['area_input']);
    }

    public function getUserModel($returnNew = false)
    {
        static $model = null;
        if (is_null($model) || $returnNew) {
            $model = new User();
        }

        return $model;
    }

    public function signup()
    {
        $result = $this->_signup();

        $quoteInfo = [];
        $areaInput = $this->_datas['area_input'];
        if ($areaInput > 20 && $areaInput < 500) {
            $rateDatas = [
                '677' => '2.7',
                '674' => '2.7',
                '671' => '3',
            ];
            $priceRate = isset($rateDatas[$this->_datas['merchant_id']]) ? $rateDatas[$dataBase['merchant_id']] : 2;
            
            $quote = new QuoteHouse();
            $quoteInfo = $quote->getResult($areaInput, $priceRate);
        }

        if (empty($result)) {
            $result = $this->_formatFailResult();
        }
        $result['quoteInfo'] = $quoteInfo;

        return $result;
    }
}
