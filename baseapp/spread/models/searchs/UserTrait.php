<?php

namespace baseapp\spread\models\searchs;

use yii\data\ActiveDataProvider;

Trait UserTrait
{
	use UserTemplate;
    public $ext_param;

    public function rules()
    {
        return [
            [['ext_param', 'merchant_id', 'mobile', 'service_id', 'status', 'invalid_status', 'created_at_start', 'created_at_end',], 'safe'],
        ];
    }

    public function _searchElems()
    {
        $extParam = $this->ext_param;
        $extData = [];
        if ($extParam == 'pond') {
            $this->service_id = (array) $this->service_id;
            $createdAtValue = time() - 86400;
            $dispatchAtValue = time() - 21600;
            $extData = [
                ['field' => 'merchant_id', 'type' => 'common'],
                ['field' => 'service_id', 'type' => 'common', 'sort' => 'notIn'],
                ['field' => 'created_at', 'type' => 'common', 'sort' => 'less', 'value' => $createdAtValue],
                ['field' => 'dispatch_at', 'type' => 'common', 'sort' => 'less', 'value' => $dispatchAtValue],
            ];
        } else {
            $extData = [
                ['field' => 'service_id', 'type' => 'common'],
                ['field' => 'merchant_id', 'type' => 'common'],
            ];
        }

        $data = [
            ['field' => 'mobile', 'type' => 'common', 'sort' => 'like'],
            ['field' => 'status', 'type' => 'common'],
            ['field' => 'created_at', 'type' => 'rangeTime'],
        ];
        $data = array_merge($data, $extData);

        return $data;
    }

    public function getSearchDatas()
    {
        $list = [
            $this->_sPointParam(['field' => 'merchant_id', 'table' => 'merchant']),
            $this->_sPointParam(['field' => 'service_id', 'table' => 'service', 'where' => ['status_ext' => [1]]]),
            $this->_sKeyParam(['field' => 'status']),
        ];
        $form = [
        [
            $this->_sTextParam(['field' => 'mobile']),
            $this->_sStartParam(),
        ],
        ];
        $datas = ['list' => $list, 'form' => $form];
        return $datas;
    }

    protected function _defaultPagination()
    {
        return [
            'pageSize' => 100,
        ];
    }
}
