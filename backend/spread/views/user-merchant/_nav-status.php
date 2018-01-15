<?php
$infos = $model->statusInfos;
$statusCurrent = $model->status;
$merchantInfos = $model->merchantAllInfos;
$merchantId = $model->merchant_id;
?>

<div>
    <ul class="breadcrumb">
<?php
$subnavString = '';
foreach ($infos as $status => $sValue) {
    $styleStr =  $status == $statusCurrent ? 'style="color:#009900;"' : '';
    $urlStr =  '?status=' . $status;// . '&merchant_id=' . $merchantId;
    $urlStr .=  !empty($merchantId) ? '&merchant_id=' . $merchantId : '';
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
$validMerchantIds = ['671', '667', '669', '682', '684'];
foreach ($merchantInfos as $sId => $sInfo) {
	if (!in_array($sId, $validMerchantIds)) { continue; } 
    $styleStr =  $sId === $merchantId ? 'style="color:#009900;"' : '';
    $urlStr =  '?merchant_id=' . $sId;
    $urlStr .=  is_null($statusCurrent) ? '' : '&status=' . $statusCurrent;
    $subnavString .= "<li><a href='{$urlStr}' {$styleStr}>{$sInfo['name']}</a></li>";
}
echo $subnavString;
?>
    </ul>
</div>
