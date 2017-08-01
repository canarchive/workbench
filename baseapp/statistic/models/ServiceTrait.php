<?php

namespace baseapp\statistic\models;

use Yii;

trait ServiceTrait
{
    public function attributeLabels()
    {
        $datas = [];
        foreach ($this->_fieldsInfos() as $field => $value) {
            $datas[$field] = $value['name'];
        }
        return array_merge($this->attributeBase(), $datas);
    }

    public function getFieldsStr($type)
    {
        $str = '';
        foreach ($this->_fieldsInfos() as $field => $value) {
            if ($type == 'wage') {
                $fTypes = $value['type'];
                if (in_array('dispatch', $fTypes) || in_array('back', $fTypes)) {
                    continue;
                }
            }

            $str .= ", SUM(`{$field}`) AS `{$field}`,";
        }

        $str = rtrim(str_replace(',,', ',', $str), ',');
        return $str;
    }

    public function getShowFields()
    {
        $showFieldBase = Yii::$app->request->get('show_field', '');
        $showField = empty($showFieldBase) ? ['base'] : explode('-', $showFieldBase);
        $showFields = ['base', 'mobile', 'back', 'dispatch', 'part', 'overall', 'office'];

        $showField = $showField == array_intersect($showField, $showFields) ? $showField : ['base'];
        $datas = [];
        foreach ($this->_fieldsInfos() as $field => $value) {
            $type = $value['type'];
            if ($showFieldBase == 'all' || !empty(array_intersect($showField, $type))) {
                $datas[] = $field;
            }
        }
        return $datas;
    }

    protected function _fieldsInfos()
    {
        return [
            'info_num' => ['name' => '报名数', 'type' => ['base', 'wage']],
            'info_valid_num' => ['name' => '报名有效数', 'type' => ['base', 'wage']],
            'info_valid_overall_num' => ['name' => '报名整装有效数', 'type' => ['overall', 'wage']],
            'info_valid_office_num' => ['name' => '报名公装有效数', 'type' => ['office', 'wage']],
            'info_valid_part_num' => ['name' => '报名局装有效数', 'type' => ['part', 'wage']],

            'mobile_num' => ['name' => '手机数', 'type' => ['base', 'mobile', 'wage']],
            'dispatch_num' => ['name' => '派单数', 'type' => ['dispatch']],
            'back_num' => ['name' => '退单数', 'type' => ['back']],
            'back_mobile_num' => ['name' => '退单手机数', 'type' => ['back', 'mobile']],

            'overall_mobile_num' => ['name' => '整装手机数', 'type' => ['base', 'overall', 'mobile','wage']],
            'overall_dispatch_num' => ['name' => '整装派单数', 'type' => ['overall', 'dispatch']],
            'overall_back_num' => ['name' => '整装退单数', 'type' => ['overall', 'back']],
            'overall_back_mobile_num' => ['name' => '整装退单手机数', 'type' => ['overall', 'back', 'mobile']],

            'office_mobile_num' => ['name' => '局装手机数', 'type' => ['base', 'office', 'mobile', 'wage']],
            'office_dispatch_num' => ['name' => '局装派单数', 'type' => ['office', 'dispatch']],
            'office_back_num' => ['name' => '局装退单数', 'type' => ['office', 'back']],
            'office_back_mobile_num' => ['name' => '局装退单手机数', 'type' => ['office', 'back', 'mobile']],

            'part_mobile_num' => ['name' => '公装手机数', 'type' => ['base', 'part', 'mobile', 'wage']],
            'part_dispatch_num' => ['name' => '公装派单数', 'type' => ['part', 'dispatch']],
            'part_back_num' => ['name' => '公装退单数', 'type' => ['part', 'back']],
            'part_back_mobile_num' => ['name' => '公装退单手机数', 'type' => ['part', 'back', 'mobile']],
        ];
    }
}
