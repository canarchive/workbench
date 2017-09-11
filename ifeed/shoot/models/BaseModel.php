<?php

namespace ifeed\shoot\models;

use Yii;
use ifeed\models\BaseModel as BaseModelBase;

class BaseModel extends BaseModelBase
{
    public function _getClassPrefix()
    {
        return '\ifeed\shoot\models\\';
    }

    public function uploadUrl($table, $field, $id)
    {   
        return Yii::getAlias('@shoot.cmsurl') . "/upload/{$table}/{$field}.html?mparam=shoot&id={$id}";
    } 

    public function getSiteCodeInfos()
    {
        return [
            'shoot' => '互联影像',
            'eale' => '右视觉',
            'hstudio' => '韩涵摄影',
        ];
    }
}
