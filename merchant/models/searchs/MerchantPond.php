<?php

namespace merchant\models\searchs;

use Yii;
use merchant\models\MerchantPond as MerchantPondModel;

class MerchantPond extends MerchantPondModel
{
    use MerchantTrait;
    public $salemanId;
    public $salemanInfo;
    public $managerInfo;

    public function init()
    {
        parent::init();

        $this->managerInfo = isset(Yii::$app->params['managerInfo']) ? Yii::$app->params['managerInfo'] : false;
        $this->salemanInfo = isset(Yii::$app->params['salemanInfo']) ? Yii::$app->params['salemanInfo'] : false;
        $this->managerRole = isset($this->managerInfo['role']) ? $this->managerInfo['role'] : false;
        $this->salemanId = isset($this->salemanInfo['id']) ? $this->salemanInfo['id'] : false;
    }

    public function _searchElems()
    {
        if ($this->managerRole == 'service-saleman') {
            $this->saleman_id = $this->salemanId;
        }
        if (!in_array($this->current_action, ['follow', 'myself'])) {
            if ($this->managerRole == 'service-saleman') {
    			$this->display_level = '';
                $extData = [
                    ['field' => 'saleman_id', 'type' => 'common', 'sort' => 'notIn'],
                    ['field' => 'status', 'value' => 'cooperation', 'type' => 'common', 'sort' => 'notIn'],
    			];
    		} else {
                $extData = [
                    ['field' => 'saleman_id', 'type' => 'common'],
                ];
    		}
        } else {
            $extData = [
                ['field' => 'saleman_id', 'type' => 'common'],
            ];
        }
        switch ($this->current_action) {
        case 'follow':
            $this->display_level = '';
            break;
        case 'myself':
            $this->display_level = 'private';
            break;
        }
        $return = array_merge([
            ['field' => 'name', 'type' => 'common', 'sort' => 'like'],
            ['field' => 'status', 'type' => 'common'],
            ['field' => 'display_level', 'type' => 'common'],
            ['field' => 'created_at', 'type' => 'rangeTime'],
        ], $extData);
        if (!empty($this->merchant_id)) {
            $this->id = $this->merchant_id;
            $return[] = ['field' => 'id', 'type' => 'common'];
        }
        return $return;
    }

    protected function _defaultPagination()
    {
        return [
            'pageSize' => 100,
        ];
    }
}
