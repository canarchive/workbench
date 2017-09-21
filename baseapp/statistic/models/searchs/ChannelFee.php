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
        $fieldsStr .= ", SUM(`visit_num`) AS `visit_num`, SUM(`success_num`) AS `success_num`, SUM(`valid_num`) AS `valid_num`, SUM(`fee`) AS `fee`, SUM(`show_num`) As `show_num`, SUM(`hit_num`) AS `hit_num`";
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
            $this->_sKeyParam(['field' => 'client_type']),
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
        $columns = [
            'fee',
            'show_num',
            [
                'attribute' => 'visit_num',
                'label' => '访问数',
                'value' => function($model) {
                    $diff = $model->visit_num - $model->hit_num;
                    return $model->visit_num . "( {$diff} )";
                }
            ],
            [
                'attribute' => 'hit_num',
                'label' => '点击数-点击率-点击费用',
                'value' => function($model) {
                    return $model->hit_num . $model->formatPercent($model->hit_num, $model->show_num) . $model->formatDivisor($model->fee, $model->hit_num);
                }
            ],
            [
                'attribute' => 'success_num',
                'label' => '报名数-报名率-报名单价',
                'value' => function($model) {
                    return $model->success_num . $model->formatPercent($model->success_num, $model->hit_num) . $model->formatDivisor($model->fee, $model->success_num);
                }
            ],
            [
                'attribute' => 'valid_num',
                'label' => '有效数-有效率-有效单价',
                'value' => function($model) {
                    return $model->valid_num . $model->formatPercent($model->valid_num, $model->success_num) . $model->formatDivisor($model->fee, $model->valid_num);
                }
            ],
        ];
        return $columns;
    }
}
