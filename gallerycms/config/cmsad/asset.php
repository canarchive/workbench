<?php
$baseAsseturl = Yii::getAlias('@asseturl') . '/cmsad/';
return [
    'cssFiles' => [
        'common' => $baseAsseturl . 'pc/css/common.css',
        'public' => $baseAsseturl . 'pc/css/public.css',
        'index' => $baseAsseturl . 'pc/css/index.css',
        'guanwang' => $baseAsseturl . 'pc/css/guanwang.css',
        'haiwaituiguang' => $baseAsseturl . 'pc/css/haiwaituiguang.css',
        'style' => $baseAsseturl . 'pc/css/style.css',
        'alzx' => $baseAsseturl . 'pc/css/alzx.css',

        'swiper.min' => $baseAsseturl . 'mobile/css/swiper.min.css',
        'common-mobile' => $baseAsseturl . 'mobile/css/common-mobile.css',
        'style-m' => $baseAsseturl . 'mobile/css/style.css',
        'submit' => $baseAsseturl . 'mobile/css/submit.css',
    ],
    'jsFiles' => [
        'jquery-1.8.3.min' => $baseAsseturl . 'pc/js/jquery-1.8.3.min.js',
        'common' => $baseAsseturl . 'pc/js/common.js',
        'position' => $baseAsseturl . 'pc/js/position.js',
        'public' => $baseAsseturl . 'pc/js/public.js',
        'createCity' => $baseAsseturl . 'pc/js/createCity.js',
        'submit' => $baseAsseturl . 'pc/js/submit.js',
        'jquery.cityselect' => $baseAsseturl . 'pc/js/jquery.cityselect.js',
        'jquery.mailAutoComplete' => $baseAsseturl . 'pc/js/jquery.mailAutoComplete.js',
        'right' => $baseAsseturl . 'pc/js/right.js',
        'count' => $baseAsseturl . 'pc/js/count.js',

        'swiper.min' => $baseAsseturl . 'mobile/js/swiper.min.js',
        'public-m' => $baseAsseturl . 'mobile/js/public.js',
        'common-m' => $baseAsseturl . 'mobile/js/common.js',
        'position-m' => $baseAsseturl . 'mobile/js/position.js',
        'city-select' => $baseAsseturl . 'mobile/js/city-select.js',
    ],
];
