<?php

namespace baseapp\statistic\models;

class ServiceDispatch extends AbstractStatistic
{
    use ServiceTrait;

    public static function tableName()
    {
        return '{{%service_dispatch_origin}}';
    }

    public function getFieldInfos()
    {
        $fields = ['service_id', 'created_month', 'created_week', 'created_day'];
        return $fields;
    }
}
