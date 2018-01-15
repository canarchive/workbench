<?php

namespace common\components;

use Yii;
use yii\widgets\LinkPager as LinkPagerBase;

class LinkPager extends LinkPagerBase
{
    protected function renderPageButton($label, $page, $class, $disabled, $active)
    {
        $url = parent::renderPageButton($label, $page, $class, $disabled, $active);
        $urlInfos = parse_url($url);
        $return = isset($urlInfos['path']) ? $urlInfos['path'] : '';
        $return .= isset($urlInfos['query']) ? $urlInfos['query'] : '';
        echo $return;
        return $return;
    }
}
