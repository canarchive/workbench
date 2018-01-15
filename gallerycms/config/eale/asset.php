<?php
$baseAsseturl = Yii::getAlias('@asseturl') . '/third/eale/';
return [
    'cssFiles' => [
        'bootstrap' => $baseAsseturl . 'css/bootstrap.css',
        'yq_docs' => $baseAsseturl . 'css/yq_docs.css',
        'style_m' => $baseAsseturl . 'css/style_m.css',
    ],
    'jsFiles' => [
        'jquery' => $baseAsseturl . 'js/jquery-1.7.min.js',
        'unveil' => $baseAsseturl . 'js/jquery.unveil.min.js',
        'bootstrap' => $baseAsseturl . 'js/bootstrap.min.js',
        'yq_doc' => $baseAsseturl . 'js/yq_doc.js',
        'hammer' => $baseAsseturl . 'js/hammer.min.js',
    ],
];
