<?php
$menuInfos = $this->context->menuInfos;
$sort = $this->context->sort;

$listMenu = isset($menuInfos['menus']['eale_article_listinfo_' . $sort]) ? $menuInfos['menus']['eale_article_listinfo_' . $sort] : false;
$addMenu = isset($menuInfos['menus']['eale_article_add']) ? $menuInfos['menus']['eale_article_add'] : false;

$subMenus = [$addMenu, $listMenu];
?>
<div>
    <ul class="breadcrumb">
<?php
$subnavString = '';
foreach ($subMenus as $appMenu) {
    $styleStr = ($menuInfos['currentMenu']['method'] == $appMenu['method']) ? 'style="color:#009900;"' : '';
    $urlStr = ($menuInfos['currentMenu']['method'] == $appMenu['method']) ? 'javascript:void(0);' : $appMenu['url'] . '?sort=' . $sort;
    $subnavString .= "<li><a href='{$urlStr}' {$styleStr}>{$appMenu['name']}</a></li>";
}
echo $subnavString;
?>
    </ul>
</div>
