<?php

namespace ifeed\components;

use Yii;
use yii\widgets\LinkPager as LinkPagerBase;

class LinkPager extends LinkPagerBase
{
    protected function renderPageButton($label, $page, $class, $disabled, $active)
    {
        $return = parent::renderPageButton($label, $page, $class, $disabled, $active);
        $return = str_replace(Yii::getAlias('@eale.cmsurl'), '', $return);
        return $return;
    }
}
