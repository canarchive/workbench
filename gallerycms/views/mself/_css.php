<?php
$asseturl = Yii::getAlias('@assetself');
foreach ($cssFiles as $file) { 
    echo "<link rel='stylesheet' type='text/css' href='{$asseturl}/{$file}.css' />";
} ?>
