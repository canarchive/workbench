<?php

namespace baseapp\spread\models\searchs;

use yii\data\ActiveDataProvider;

Trait UserTrait
{
	use UserTemplate;

    public function rules()
    {
        return [
            [['merchant_id', 'mobile', 'service_id', 'status', 'invalid_status', 'created_at_start', 'created_at_end',], 'safe'],
        ];
    }

    public function _searchElems()
    {
        return [
            ['field' => 'mobile', 'type' => 'common', 'sort' => 'like'],
            ['field' => 'service_id', 'type' => 'common'],
            ['field' => 'merchant_id', 'type' => 'common'],
            ['field' => 'status', 'type' => 'common'],
            ['field' => 'created_at', 'type' => 'rangeTime'],
        ];
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
