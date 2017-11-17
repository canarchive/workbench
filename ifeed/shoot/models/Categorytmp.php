<?php

namespace ifeed\shoot\models;

use Yii;
use baseapp\common\models\CategoryTrait;

class Categorytmp extends BaseModel
{
    use CategoryTrait;

    public static function tableName()
    {
        return '{{%categorytmp}}';
    }

    public function getSourceUrl($info)
    {
        $url = $this->sourceDomain;
        if ($info['code'] == 'sxdt' || $info['parent_code'] == 'sxdt') {

        } else {
            $url .= $info['type_code'] . '/';
            $url .= empty($info['parent_code']) ? '' : 'catalog.asp?cate=' . $info['source_id'];
        }
        return $url;
    }

    public function getRedirectUrl($info)
    {
        $url = $this->getSourceUrl($info);
        return str_replace($this->sourceDomain, Yii::getAlias('@r.infotmp.ifeedurl') . '/', $url);
    }

    public function getNowUrl($info)
    {
        return Yii::getAlias('@infotmp.ifeedurl') . '/' . $info['code'] . '/';
    }
}
