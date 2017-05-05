<?php

namespace spread\decoration\models;

use spread\models\Spreadfee as SpreadfeeBase;

class Spreadfee extends SpreadfeeBase
{
    use \spread\models\DecorationTrait;

    public static function tableName()
    {
        return '{{%planfee}}';
    }
}
