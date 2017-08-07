<?php

namespace baseapp\statistic\models\searchs;

use yii\data\ActiveDataProvider;
use baseapp\statistic\models\Visit as VisitModel;

class Visit extends VisitModel
{
    public function rules()
    {
        return [
            [['merchant_id', 'keyword', 'created_day_start', 'created_day_end', 'client_type', 'channel'], 'safe'],
        ];
    }

    protected function _searchElems()
    {
        $this->keyword_search = $this->keyword;
        return [
            ['field' => 'keyword', 'type' => 'common', 'sort' => 'like'],
            ['field' => 'keyword_search', 'type' => 'common', 'sort' => 'orLike'],
            ['field' => 'merchant_id', 'type' => 'common'],
            ['field' => 'client_type', 'type' => 'common'],
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
            $this->_sTextParam(['field' => 'keyword']),
            $this->_sStartParam(),
        ]
        ];
        $datas = ['list' => $list, 'form' => $form];
        return $datas;
    }
}
