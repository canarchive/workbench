<?php
$infos = $model->statusInfos;
$statusCurrent = $model->status;
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
