<?php
$infos = $elem['infos'];
$field = $elem['field'];
$value = $model->$field;

?>
<div>
    <ul class="breadcrumb">
<?php
$subnavString = '';
foreach ($infos as $sId => $sName) {
    $styleStr =  $sId === $value ? 'style="color:#009900;"' : '';
    $urlStr =  "?{$field}={$sId}";
    $subnavString .= "<li><a href='{$urlStr}' {$styleStr}>{$sName}</a></li>";
}
echo $subnavString;
?>
    </ul>
</div>
