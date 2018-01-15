<?php
$infos = $model->channelInfos;
$channel = $model->channel;
$fieldHitBase = $model->field_hit;
$fieldHit = !is_null($model->client_type) && !in_array('client_type', $model->fields) ? 'client_type-' . $fieldHitBase : $fieldHitBase;
$clientType = $model->client_type;
?>

<div>
    <ul class="breadcrumb">
<?php
$subnavString = '';
foreach ($infos as $cCode => $cName) {
    $styleStr =  $cCode == $channel ? 'style="color:#009900;"' : '';
    $urlStr =  '?client_type=' . $clientType . '&channel=' . $cCode . '&field_hit=' . $fieldHit;
    $subnavString .= "<li><a href='{$urlStr}' {$styleStr}>{$cName}</a></li>";
}
echo $subnavString;
?>
    </ul>
</div>
