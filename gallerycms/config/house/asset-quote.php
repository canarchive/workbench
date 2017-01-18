<?php
$baseAsseturl = Yii::getAlias('@asseturl') . '/hplat/';
return [
    'cssFiles' => [
        'quote1-animate.min' => $baseAsseturl . 'quote1/css/animate.min.css',
        'quote1-common' => $baseAsseturl . 'quote1/css/common.css',
        'quote1-common_pc' => $baseAsseturl . 'quote1/css/common_pc.css',
        'quote1-offer' => $baseAsseturl . 'quote1/css/offer.css',
        'quote1-poplayer' => $baseAsseturl . 'quote1/css/poplayer.css',
        'quote1-poplunbo' => $baseAsseturl . 'quote1/css/poplunbo.css',

        'quote1-m-common' => $baseAsseturl . 'quote1-m/css/common.css',
        'quote1-m-decoration-budget' => $baseAsseturl . 'quote1-m/css/decoration-budget.css',
        'quote1-m-icon_font' => $baseAsseturl . 'quote1-m/css/icon_font.css',
        'quote1-m-mycom_part' => $baseAsseturl . 'quote1-m/css/mycom_part.css',
    ],
    'jsFiles' => [
        'quote1-common' => $baseAsseturl . 'quote1/js/common.js',
        'quote1-jquery-1.11.3.min' => $baseAsseturl . 'quote1/js/jquery-1.11.3.min.js',
        'quote1-jquery.lazyload.min' => $baseAsseturl . 'quote1/js/jquery.lazyload.min.js',
        'quote1-offer' => $baseAsseturl . 'quote1/js/offer.js',
        'quote1-poplayer' => $baseAsseturl . 'quote1/js/poplayer.js',
        'quote1-poplunbo' => $baseAsseturl . 'quote1/js/poplunbo.js',
        'quote1-provinces' => $baseAsseturl . 'quote1/js/provinces.js',

        'quote1-m-swiper' => $baseAsseturl . 'quote1-m/css/swiper.css',
        'quote1-m-1.8.3' => $baseAsseturl . 'quote1-m/js/1.8.3.js',
        'quote1-m-require' => $baseAsseturl . 'quote1-m/js/require.js',
    ],
];
