<?php
use yii\helpers\Url;
?>
<div class="banner">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <a href="/sp-smobile.html">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/mobile/banner/index_<?= $this->context->siteCode; ?>_1.jpg" alt="感恩有您-<?= Yii::$app->params['siteNameBase']; ?>"></a>
            </div>
            <div class="swiper-slide">
                <a href="/sp-smobile.html">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/mobile/banner/index_<?= $this->context->siteCode; ?>_2.jpg" alt=""></a>
            </div>
            <div class="swiper-slide">
                <a href="/sp-sqq.html">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/mobile/banner/index_<?= $this->context->siteCode; ?>_3.jpg" alt=""></a>
            </div>
            <div class="swiper-slide">
                <a href="/sp-sqq.html">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/mobile/banner/index_<?= $this->context->siteCode; ?>_4.jpg" alt=""></a>
            </div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
    </div>
</div>
