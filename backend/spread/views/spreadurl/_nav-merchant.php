<?php
$infos = $model->merchantAllInfos;
$merchantId = $model->merchant_id;
?>

<div>
    <ul class="breadcrumb">
<?php
$subnavString = '';
foreach ($infos as $mId => $mInfo) {
    $styleStr =  $mId == $merchantId ? 'style="color:#009900;"' : '';
    $urlStr =  '?merchant_id=' . $mId . '&field_hit=' . $model->field_hit;
    $subnavString .= "<li><a href='{$urlStr}' {$styleStr}>{$mInfo['name']}</a></li>";
}
echo $subnavString;
?>
    </ul>
</div>
