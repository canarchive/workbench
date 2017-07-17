<?php

namespace merchant\models;

use baseapp\merchant\models\Merchant;

class NewContact extends Contact
{
    public static function tableName()
    {
        return '{{%new_contact}}';
    }
}
