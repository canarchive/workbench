<?php
$infos = $model->merchantAllInfos;
$merchantId = $model->merchant_id;
$validMerchantIds = ['671', '667', '669', '682', '684', '686'];
$fieldHit = $model->field_hit;
$serviceInfos = $model->serviceInfos;
$serviceId = $model->service_id;
?>
<div>
    <ul class="breadcrumb">
<?php
$subnavString = '';
foreach ($infos as $mId => $mInfo) {
    if (!in_array($mId, $validMerchantIds)) { continue; }
    $styleStr =  $mId == $merchantId ? 'style="color:#009900;"' : '';
    $urlStr =  '?merchant_id=' . $mId . '&field_hit=' . $model->field_hit;
    $subnavString .= "<li><a href='{$urlStr}' {$styleStr}>{$mInfo['name']}</a></li>";
}
echo $subnavString;
?>
    </ul>
</div>

<div>
    <ul class="breadcrumb">
<?php
$subnavString = '';
foreach ($serviceInfos as $sId => $sInfo) {
	if (!in_array($sId, [27, 28, 31])) { continue; } 
    $styleStr =  $sId === $serviceId ? 'style="color:#009900;"' : '';
    $urlStr =  '?service_id=' . $sId . '&field_hit=' . $fieldHit;
    $subnavString .= "<li><a href='{$urlStr}' {$styleStr}>{$sInfo['name']}</a></li>";
}
echo $subnavString;
?>
    </ul>
</div>

