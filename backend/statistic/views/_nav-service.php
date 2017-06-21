<?php
$dataTypes = $model->dataTypes;
$fieldHit = $model->field_hit;
$dataType = $model->data_type;
$serviceId = $model->service_id;
?>

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
