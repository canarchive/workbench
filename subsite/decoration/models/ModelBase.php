<?php

namespace subsite\decoration\models;

use Yii;
use common\models\SubsiteModel;

class ModelBase extends SubsiteModel
{
    public function _getClassPrefix()
    {
        return "\subsite\decoration\models\\";
    }

    public function aTagMobile($view, $showMobile = false)
    {
        $menu = $view->getMenuData('subsite_decoration_user_update');
        $str = $showMobile ? $this->mobile : $this->maskMobile($this->mobile);
        if (!empty($menu)) {
            $url = $menu['url'] . '?id=' . $this->user_id;
            $str = "<a href='{$url}'>{$str}</a>";
        }
        return $str;
    }
}
