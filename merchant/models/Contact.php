<?php

namespace merchant\models;

class Contact extends BaseModel
{
    public static function tableName()
    {
        return '{{%contact}}';
    }

    public function getGatherListElems()
    {
        return [
            'name' => ['sort' => 'change'],
            'mobile' => ['sort' => 'change'],
            'title' => ['sort' => 'change'],
            'orderlist' => ['sort' => 'change'],
            'description' => ['sort' => 'change'],
        ];
    }
}
