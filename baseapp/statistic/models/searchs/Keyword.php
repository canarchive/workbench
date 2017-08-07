<?php

namespace baseapp\statistic\models\searchs;

use yii\data\ActiveDataProvider;
use baseapp\statistic\models\Keyword as KeywordModel;

class Keyword extends KeywordModel
{

    public function rules()
    {
        return [
            [['field_hit', 'created_day_start', 'created_day_end', 'merchant_id', 'channel', 'client_type'], 'safe'],
        ];
    }

    protected function _searchElems()
    {
        $this->keyword_search = $this->keyword;
        return [
            ['field' => 'keyword', 'type' => 'common', 'sort' => 'like'],
            ['field' => 'keyword_search', 'type' => 'common', 'sort' => 'orLike'],
            ['field' => 'client_type', 'type' => 'common'],
            ['field' => 'channel', 'type' => 'common'],
            ['field' => 'created_day', 'type' => 'rangeTime', 'timestamp' => false],
        ];
    }

    protected function _searchPre(& $query)
    {
        $this->fields = $fields = $this->_getCheckedFields();
        $fieldsStr = implode(',', $fields);
        $fieldsStr .= ", SUM(`visit_num`) AS `visit_num`, SUM(`visit_num_success`) AS `visit_num_success`";
        //echo $fieldsStr;exit();
        $query->select($fieldsStr);
        $query->groupBy($fields);
    }    

    protected function _getCheckedFields()
    {
        if ($this->field_hit == 'all') {
            return [];
        }
        
        $fields = explode('-', trim($this->field_hit,'-'));
        $datas = ['city_code', 'merchant_id', 'client_type', 'keyword', 'keyword_search', 'channel', 'sem_account', 'created_month', 'created_week', 'created_weedkay', 'created_day', 'created_hour'];
        foreach ($fields as $field) {
            if (!in_array($field, $datas)) {
                return ['keyword', 'created_day'];
            }
        }
        return $fields;
    }

    public function _searchDatas()
    {
        $list = [
            $this->_sKeyParam(['field' => 'client_type']),
            $this->_sKeyParam(['field' => 'channel']),
        ];
        $form = [
        [
            $this->_sTextParam(['field' => 'keyword']),
            $this->_sStartParam(),
            $this->_sHiddenParam(['field' => 'field_hit']),
        ]
        ];
        $datas = ['list' => $list, 'form' => $form];
        return $datas;
    }
}
