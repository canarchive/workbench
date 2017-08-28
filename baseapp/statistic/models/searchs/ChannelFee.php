<?php

namespace baseapp\statistic\models\searchs;

use yii\data\ActiveDataProvider;
use baseapp\statistic\models\ChannelFee as ChannelFeeModel;

class ChannelFee extends ChannelFeeModel
{

    public function rules()
    {
        return [
            [['account_id', 'field_hit', 'created_day_start', 'created_day_end', 'channel', 'client_type'], 'safe'],
        ];
    }

    public function _searchElems()
    {
        return [
            ['field' => 'client_type', 'type' => 'common'],
            ['field' => 'channel', 'type' => 'common'],
            ['field' => 'account_id', 'type' => 'common'],
            //['field' => 'merchant_id', 'type' => 'common'],
            ['field' => 'created_day', 'type' => 'rangeTime', 'timestamp' => false],
        ];
    }    

    protected function _searchPre(& $query)
    {
        $this->fields = $fields = $this->_getCheckedFields();
        $fieldsStr = implode(',', $fields);
        $fieldsStr .= ", SUM(`fee`) AS `fee`, SUM(`show_num`) As `show_num`, SUM(`hit_num`) AS `hit_num`";
        $query->select($fieldsStr);
        $query->groupBy($fields);

    }

    protected function _getCheckedFields()
    {
        if ($this->field_hit == 'all') {
            return [];
        }
        
        $fields = explode('-', trim($this->field_hit,'-'));
        $datas = ['client_type', 'channel', 'account_id', 'plan_id', 'created_month', 'created_week', 'created_weedkay', 'created_day', 'created_hour'];
        foreach ($fields as $field) {
            if (!in_array($field, $datas)) {
                return ['account_id', 'created_day'];
            }
        }
        return $fields;
    }

    public function _searchDatas()
    {
        $list = [
            //$this->_sPointParam(['field' => 'merchant_id', 'table' => 'merchant']),
            //$this->_sKeyParam(['field' => 'client_type']),
            $this->_sKeyParam(['field' => 'channel']),
            $this->_sPointParam(['field' => 'account_id', 'table' => 'account']),
        ];
        $form = [
        [
            $this->_sTextParam(['field' => 'plan_id']),
            $this->_sStartParam(['field' => 'created_day']),
            $this->_sHiddenParam(['field' => 'field_hit']),
        ]
        ];
        $datas = ['list' => $list, 'form' => $form];
        return $datas;
    }

    public function getReportBaseColumns()
    {
        $base = ['visit_num'];
        $columns = [
            'fee',
            'show_num',
            'hit_num',
            /*'visit_num_success',
            'success_rate' => [
                'attribute' => 'success_rate',
                'value' => function ($model) {
                    return $model->getSuccessRate();
                },
                ],*/
        ];
        return $columns;
    }
}
