<?php

namespace baseapp\statistic\models;

class ServiceWage extends AbstractStatistic
{
    use ServiceTrait;

    public static function tableName()
    {
        return '{{%service_wage_origin}}';
    }

    public function getFieldInfos()
    {
        $fields = ['service_id', 'created_month'];
        return $fields;
    }

    public function getShowFields()
    {
        $datas = [];
        foreach ($this->_fieldsInfos() as $field => $value) {
            $type = $value['type'];
            if (in_array('wage', $type)) {
                $datas[] = $field;
            }
        }
        return $datas;
    }
}
