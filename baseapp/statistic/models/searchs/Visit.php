<?php

namespace baseapp\statistic\models\searchs;

use yii\data\ActiveDataProvider;
use baseapp\statistic\models\Visit as VisitModel;

class Visit extends VisitModel
{
    public $is_precision;
    public function rules()
    {
        return [
            [['sem_account', 'merchant_id', 'is_precision', 'keyword', 'created_at_start', 'created_at_end', 'client_type', 'channel'], 'safe'],
        ];
    }

    protected function _searchElems()
    {
        $this->keyword_search = $this->keyword;
        $isPrecision = $this->is_precision;
        $elems = [];
        if ($isPrecision) {
            $elems = [
                ['field' => 'keyword', 'type' => 'common'],
                ['field' => 'keyword_search', 'type' => 'common', 'sort' => 'orEqual'],
            ];
        } else {
            $elems = [
                ['field' => 'keyword', 'type' => 'common', 'sort' => 'like'],
                ['field' => 'keyword_search', 'type' => 'common', 'sort' => 'orLike'],
            ];
        }

        return array_merge($elems, [
            ['field' => 'merchant_id', 'type' => 'common'],
            ['field' => 'client_type', 'type' => 'common'],
            ['field' => 'sem_account', 'type' => 'common'],
            ['field' => 'channel', 'type' => 'common'],
            ['field' => 'created_at', 'type' => 'rangeTime'],
        ]);
    }

    public function _searchDatas()
    {
        $list = [
            $this->_sPointParam(['field' => 'merchant_id', 'table' => 'merchant']),
            $this->_sKeyParam(['field' => 'client_type']),
            $this->_sKeyParam(['field' => 'channel']),
            $this->_sPointParam(['field' => 'sem_account', 'table' => 'account']),
        ];

        $form = [
        [
            $this->_sTextParam(['field' => 'keyword']),
            $this->_sKeyParam(['name' => '', 'noAll' => true, 'field' => 'is_precision', 'type' => 'checkbox-form', 'forceShow' => true, 'infos' => ['1' => '精确匹配']]),
            $this->_sStartParam(),
        ]
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
