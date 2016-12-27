<?php
$menuInfos = $this->context->menuInfos['menus'];
$position = $this->context->attrParams['position'];
$siteCode = $this->context->attrParams['site_code'];
$page = $this->context->attrParams['page'];

$addMenu = isset($menuInfos['eale_adpicture_add']) ? $menuInfos['eale_adpicture_add'] : false;
$addMenu = $position != 'slide' ? false : $addMenu;

$subMenus = [$addMenu];
?>
<?php
$subnavString = '<div><ul class="breadcrumb">';
foreach ($subMenus as $appMenu) {
    $urlStr = "{$appMenu['url']}?site_code={$siteCode}&page={$page}&position={$position}";
    $subnavString .= "<li><a href='{$urlStr}'>{$appMenu['name']}</a></li>";
}
$subnavString .= '</ul></div>';
echo $subnavString;
?>
