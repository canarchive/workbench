<?php

namespace ifeed\models;

use Yii;
use baseapp\ifeed\models\IfeedModel;

class BaseModel extends IfeedModel
{
    public function _getClassPrefix()
    {
        return '\ifeed\models\\';
    }

    public function uploadUrl($table, $field, $id)
    {   
        return Yii::getAlias('@ifeed.cmsurl') . "/upload/{$table}/{$field}.html?mparam=&id={$id}";
    } 
}
