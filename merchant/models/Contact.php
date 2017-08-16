<?php

namespace merchant\models;

use baseapp\merchant\models\Merchant;

class Contact extends Contact
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
