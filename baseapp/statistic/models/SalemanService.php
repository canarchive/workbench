<?php

namespace baseapp\statistic\models;

class SalemanService extends AbstractStatistic
{
    use SalemanTrait;

    public static function tableName()
    {
        return '{{%saleman_service}}';
    }

    public function getFieldInfos()
    {
        $fields = ['merchant_id', 'saleman_id', 'created_month', 'created_week', 'created_day'];
        return $fields;
    }
}
