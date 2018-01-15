<?php 
$urlDatas = require __DIR__ . '/url-base.php';
$urlInfos = [];
foreach ($urlDatas as $key => $urlData) {
    if (isset($urlData['only']) && !in_array('ieale', (array) $urlData['only'])) {
        continue;
    }
    $urlInfos[$key] = $urlDatas[$key];
}
return $urlInfos;
