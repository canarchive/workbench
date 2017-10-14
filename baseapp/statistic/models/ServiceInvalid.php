<?php

namespace baseapp\statistic\models;

use Yii;

class ServiceInvalid extends AbstractStatistic
{
    public static function tableName()
    {
        return '{{%service_invalid}}';
    }

    public function getFieldInfos()
    {
        $fields = ['merchant_id', 'created_month', 'created_week', 'created_day'];
        return $fields;
    }

    public function attributeLabels()
    {
        $datas = [];
        foreach ($this->_fieldsInfos() as $field => $value) {
            $datas[$field] = $value['name'];
        }
        return array_merge($this->attributeBase(), $datas);
    }

    public function getFieldsStr()
    {
        $str = '';
        foreach ($this->_fieldsInfos() as $field => $value) {
            $fTypes = $value['type'];
            if (!in_array('base', $fTypes) && !in_array($this->_sort, $fTypes)) {
                continue;
            }
            $str .= ", SUM(`{$field}`) AS `{$field}`,";
        }

        $str = rtrim(str_replace(',,', ',', $str), ',');
        return $str;
    }

    public function getShowFields()
    {
        $datas = [];
        foreach ($this->_fieldsInfos() as $field => $value) {
            $fTypes = $value['type'];
            if (!in_array($this->_sort, $fTypes)) {
                continue;
            }
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
            'visit_num_success' => ['name' => '报名数', 'type' => ['base', 'out', 'bad']],
            'new_num' => ['name' => '未回访', 'type' => ['base']],
            'valid_num' => ['name' => '有效数', 'type' => ['base', 'out', 'bad']],
            'valid_back_num' => ['name' => '退单数', 'type' => ['base']],
            'follow_num' => ['name' => '跟踪数', 'type' => ['base']],
            'bad_num' => ['name' => '废单数', 'type' => ['base', 'bad']],
            'badnew_num' => ['name' => '未知费单数', 'type' => ['bad']],
            'badnocall_num' => ['name' => '打不通数', 'type' => ['bad']],
            'badnoneed_num' => ['name' => '无需求废单数', 'type' => ['bad']],
            'badbooked_num' => ['name' => '已装修废单数', 'type' => ['bad']],
            'badnotest_num' => ['name' => '测试废单数', 'type' => ['bad']],
            'validout_num' => ['name' => '承接范围外数', 'type' => ['base', 'out']],
            'outnew_num' => ['name' => '未知范围外数', 'type' => ['out']],
            'outout_num' => ['name' => '外地数', 'type' => ['out']],
            'outpart_num' => ['name' => '局装数', 'type' => ['out']],
            'outsmall_num' => ['name' => '小面积整装数', 'type' => ['out']],
            'outshop_num' => ['name' => '商铺数', 'type' => ['out']],
            'outsoft_num' => ['name' => '软装数', 'type' => ['out']],
        ];
    }
}
