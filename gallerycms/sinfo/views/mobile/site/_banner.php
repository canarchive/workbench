<?php
use yii\helpers\Url;
?>
<div class="banner">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <a href="/sp-smobile.html">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/mobile/simages/5768e79db8966.jpg" alt="感恩有您-<?= Yii::$app->params['siteNameBase']; ?>"></a>
            </div>
            <div class="swiper-slide">
                <a href="/sp-smobile.html">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/mobile/simages/mobile-banner11.jpg" alt=""></a>
            </div>
            <div class="swiper-slide">
                <a href="/sp-sqq.html">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/mobile/simages/58340be33e8c8.jpg" alt=""></a>
            </div>
            <div class="swiper-slide">
                <a href="/sp-sqq.html">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/mobile/simages/mobile-banner21.png" alt=""></a>
            </div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
    </div>
</div>
