<?php

namespace baseapp\statistic\models\searchs;

use baseapp\statistic\models\Conversion as ConversionModel;

class Conversion extends ConversionModel
{
    public function rules()
    {
        return [
            [['mobile', 'merchant_id', 'keyword', 'created_at_start', 'created_at_end', 'client_type', 'channel'], 'safe'],
        ];
    }

    protected function _searchElems()
    {
        $this->keyword_search = $this->keyword;
        $this->mobile = empty($this->mobile) ? null : $this->mobile;
        return [
            ['field' => 'keyword', 'type' => 'common', 'sort' => 'like'],
            ['field' => 'keyword_search', 'type' => 'common', 'sort' => 'orLike'],
            ['field' => 'merchant_id', 'type' => 'common'],
            ['field' => 'client_type', 'type' => 'common'],
            ['field' => 'mobile', 'type' => 'common', 'sort' => 'like'],
            ['field' => 'channel', 'type' => 'common'],
            ['field' => 'created_at', 'type' => 'rangeTime'],
        ];
    }

    public function _searchDatas()
    {
        $list = [
            $this->_sPointParam(['field' => 'merchant_id', 'table' => 'merchant']),
            $this->_sKeyParam(['field' => 'client_type']),
            $this->_sKeyParam(['field' => 'channel']),
        ];
        $form = [
        [
            $this->_sTextParam(['field' => 'mobile']),
            $this->_sTextParam(['field' => 'keyword']),
            $this->_sStartParam(),
        ]
        ];
        $datas = ['list' => $list, 'form' => $form];
        return $datas;
    }
}
