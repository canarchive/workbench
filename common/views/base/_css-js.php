<?php
$assetSort = isset($assetSort) ? $assetSort : 'asseturl';
$path = rtrim(Yii::getAlias("@{$assetSort}") . "/{$path}", '/') . '/';
foreach ($files as $file) { 
	if (isset($type) && $type == 'js') {
		echo "<script type='text/javascript' src='{$path}{$file}.js'></script>";
	} else {
        echo "<link rel='stylesheet' type='text/css' href='{$path}{$file}.css' />";
	}
}
?>
