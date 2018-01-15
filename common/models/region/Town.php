<?php

namespace common\models\region;

use Yii;

class Town extends AbstractRegion
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%region_town}}';
    }
}
