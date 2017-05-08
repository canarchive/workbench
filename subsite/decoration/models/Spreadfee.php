<?php

namespace subsite\decoration\models;

use subsite\models\Subsitefee as SubsitefeeBase;

class Subsitefee extends SubsitefeeBase
{
    use \subsite\models\DecorationTrait;

    public static function tableName()
    {
        return '{{%planfee}}';
    }
}
