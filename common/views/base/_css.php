<?php
$asseturl = Yii::getAlias('@asseturl');
foreach ($cssFiles as $file) { 
    echo "<link rel='stylesheet' type='text/css' href='{$asseturl}/{$path}/css/{$file}.css' />";
} ?>
