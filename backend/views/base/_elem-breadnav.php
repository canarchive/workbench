<?php if ($this->context->showSubnav) { ?>
<div>
    <ul class="breadcrumb">
<?php
$subnavString = '';
foreach ($this->params['appMenus'] as $appMenu) {
    if ($appMenu['display'] > 3) continue;
    $styleStr = ($this->params['currentMenu']['method'] == $appMenu['method']) ? 'style="color:#009900;"' : '';
    //$urlStr = ($this->params['currentMenu']['method'] == $appMenu['method']) ? 'javascript:void(0);' : $appMenu['url'];
    $urlStr = $appMenu['url'];
    $subnavString .= "<li><a href='{$urlStr}' {$styleStr}>{$appMenu['name']}</a></li>";
}
echo $subnavString;
?>
    </ul>
</div>
<?php } ?>
