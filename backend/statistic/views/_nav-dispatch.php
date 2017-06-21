<?php
$merchantId = $model->merchant_id;
$merchantIds = ['671', '667', '669', '682', '684', '686'];
$fieldHit = $model->field_hit;
$serviceId = $model->service_id;
?>
<div>
    <ul class="breadcrumb">
<?php
$subnavString = '';
foreach ($model->getPointInfos('merchant', ['where' => ['id' => $merchantIds]]) as $mId => $mName) {
    $styleStr =  $mId == $merchantId ? 'style="color:#009900;"' : '';
    $urlStr =  '?merchant_id=' . $mId . '&field_hit=' . $model->field_hit;
    $subnavString .= "<li><a href='{$urlStr}' {$styleStr}>{$mName}</a></li>";
}
echo $subnavString;
?>
    </ul>
</div>

<div>
    <ul class="breadcrumb">
<?php
$subnavString = '';
$serviceIds = [27, 28, 31, 1, 36];
foreach ($model->getPointInfos('service', ['where' => ['id' => $serviceIds]]) as $sId => $sName) {
	if (!in_array($sId, [27, 28, 31])) { continue; } 
    $styleStr =  $sId === $serviceId ? 'style="color:#009900;"' : '';
    $urlStr =  '?service_id=' . $sId . '&field_hit=' . $fieldHit;
    $subnavString .= "<li><a href='{$urlStr}' {$styleStr}>{$sName}</a></li>";
}
echo $subnavString;
?>
    </ul>
</div>

