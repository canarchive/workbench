<?php
$infos = $model->getPointAll('merchant');
$merchantId = $model->merchant_id;
?>

<div>
    <ul class="breadcrumb">
<?php
$subnavString = '';
foreach ($infos as $mId => $mInfo) {
    if (!in_array($mInfo['status'], [1, 2, 3])) { continue; }
    $styleStr =  $mId == $merchantId ? 'style="color:#009900;"' : '';
    $urlStr =  '?merchant_id=' . $mId;
    $subnavString .= "<li><a href='{$urlStr}' {$styleStr}>{$mInfo['name']}</a></li>";
}
echo $subnavString;
?>
    </ul>
</div>
