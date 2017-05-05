<?php
$dataTypes = $model->dataTypes;
$fieldHit = $model->field_hit;
$dataType = $model->data_type;
$serviceInfos = $model->serviceInfos;
$serviceId = $model->service_id;
?>

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

<div>
    <ul class="breadcrumb">
<?php
$subnavString = '';
foreach ($dataTypes as $cType => $cName) {
    $styleStr =  $cType === $dataType ? 'style="color:#009900;"' : '';
    $urlStr =  '?data_type=' . $cType . '&field_hit=' . $fieldHit;
    $subnavString .= "<li><a href='{$urlStr}' {$styleStr}>{$cName}</a></li>";
}
echo $subnavString;
?>
    </ul>
</div>
