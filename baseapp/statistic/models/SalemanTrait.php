<?php

namespace baseapp\statistic\models;

use Yii;

trait SalemanTrait
{
    public function attributeLabels()
    {
        $datas = [];
        foreach ($this->_fieldsInfos() as $field => $value) {
            $datas[$field] = $value;
        }
        return array_merge($this->attributeBase(), $datas);
    }

    public function getFieldsStr($type)
    {
        $str = '';
        foreach ($this->_fieldsInfos() as $field => $value) {
            $str .= ", SUM(`{$field}`) AS `{$field}`,";
        }

        $str = rtrim(str_replace(',,', ',', $str), ',');
        return $str;
    }

    public function getShowFields()
    {
        $datas = [];
        foreach ($this->_fieldsInfos() as $field => $value) {
            $datas[] = $this->_formatField($field);
        }
        return $datas;
    }

    protected function _formatField($field)
    {
        switch ($field) {
        case 'info_valid_num':
            return [
                'attribute' => 'info_valid_num',
                'value' => function($model) {
                    return $model->info_valid_num . $model->formatPercent($model->info_valid_num, $model->info_num);
                }
            ];
            break;
        case 'back_mobile_num':
            return [
                'attribute' => 'back_mobile_num',
                'value' => function($model) {
                    return $model->back_mobile_num . $model->formatPercent($model->back_mobile_num, $model->mobile_num + $model->back_mobile_num);
                }
            ];
            break;
        case 'back_num':
            return [
                'attribute' => 'back_num',
                'value' => function($model) {
                    return $model->back_num . $model->formatPercent($model->back_num, $model->dispatch_num + $model->back_num);
                }
            ];
            break;
        default:
            return $field;
        }
    }

    protected function _fieldsInfos()
    {
        return [
          'contract_num' => '合同数',
          'fund_first_num' => '首次费用',
          'fund_num' => '续费费用',
          'fund_all_num' => '总费用',
          'fund_current_num' => '已完成费用',
          'user_num' => '信息数',
          'user_current_num' => '已完成信息数',
        ];
    }
}
