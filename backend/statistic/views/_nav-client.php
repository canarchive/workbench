<?php
$infos = $model->clientTypeInfos;
$clientType = $model->client_type;
$fieldHitBase = $model->field_hit;
$fieldHit = !in_array('client_type', $model->fields) ? 'client_type-' . $fieldHitBase : $fieldHitBase;
$channel = $model->channel;
?>

<div>
    <ul class="breadcrumb">
<?php
$subnavString = '';
foreach ($infos as $cType => $cName) {
    $styleStr =  $cType === $clientType ? 'style="color:#009900;"' : '';
    $urlStr =  '?channel=' . $channel . '&client_type=' . $cType . '&field_hit=' . $fieldHit;
    $subnavString .= "<li><a href='{$urlStr}' {$styleStr}>{$cName}</a></li>";
}
echo $subnavString;
?>
    </ul>
</div>
