<?php
$infos = $model->statusInfos;
$statusCurrent = $model->status;
$serviceInfos = $model->getPointInfos('service');
$serviceId = $model->service_id;
?>

<div>
    <ul class="breadcrumb">
<?php
$subnavString = '';
foreach ($infos as $status => $sValue) {
    $styleStr =  $status == $statusCurrent ? 'style="color:#009900;"' : '';
    $urlStr =  '?status=' . $status;// . '&service_id=' . $serviceId;
    $urlStr .=  !empty($serviceId) ? '&service_id=' . $serviceId : '';
    $subnavString .= "<li><a href='{$urlStr}' {$styleStr}>{$sValue}</a></li>";
}
echo $subnavString;
?>
    </ul>
</div>


<div>
    <ul class="breadcrumb">
<?php
$subnavString = '';
foreach ($serviceInfos as $sId => $sName) {
	if (!in_array($sId, [27, 28, 31])) { continue; } 
    $styleStr =  $sId === $serviceId ? 'style="color:#009900;"' : '';
    $urlStr =  '?service_id=' . $sId . '&status=' . $statusCurrent;
    $subnavString .= "<li><a href='{$urlStr}' {$styleStr}>{$sName}</a></li>";
}
echo $subnavString;
?>
    </ul>
</div>
