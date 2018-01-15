<?php
$infos = $model->channelInfos;
$cChannel = $model->channel;
$fieldHitBase = in_array('client-type', $model->fields) ? str_replace(['client_type', '-client_type', 'client_type-', '-client_type-'], ['', '', '', ''], $model->field_hit) : $model->field_hit;
$fieldHit = !in_array('client_type', $model->fields) ? 'client_type-' . $fieldHitBase : $fieldHitBase;
$clientType = $model->client_type;
?>

<div>
    <ul class="breadcrumb">
<?php
$subnavString = '';
$styleStr = 'style="color:#009900;"';
foreach ($infos as $code => $cName) {
    $baseStyle = $cChannel == $code ? $styleStr : '';
    $baseStylePc = $cChannel == $code && $clientType == 'pc' ? $styleStr : '';
    $baseStyleMobile = $cChannel == $code && $clientType == 'h5' ? $styleStr : '';
    $urlStrBase =  '?channel=' . $code . '&field_hit=' . $fieldHitBase;
    $urlStr =  '?channel=' . $code . '&field_hit=' . $fieldHit;
    $subnavString .= "<li><a href='{$urlStrBase}' {$baseStyle}>{$cName}</a></li>";
    $subnavString .= "<li><a href='{$urlStr}&client_type=pc'{$baseStylePc}>{$cName}-PC</a></li>";
    $subnavString .= "<li><a href='{$urlStr}&client_type=h5' {$baseStyleMobile} >{$cName}-移动端</a></li>";
}
echo $subnavString;
?>
    </ul>
</div>
