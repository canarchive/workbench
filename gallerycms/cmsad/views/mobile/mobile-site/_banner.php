<?php
use yii\helpers\Url;
?>
<div class="banner">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <a href="<?= Url::to(['/cmsad/mobile-single-page/index', 'view' => 'sem']); ?>">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/mobile/images/5768e79db8966.jpg" alt="感恩有您-<?= Yii::$app->params['siteNameBase']; ?>"></a>
            </div>
            <div class="swiper-slide">
                <a href="<?= Url::to(['/cmsad/mobile-single-page/index', 'view' => 'seo']); ?>">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/mobile/images/mobile-banner11.jpg" alt=""></a>
            </div>
            <div class="swiper-slide">
                <a href="<?= Url::to(['/cmsad/mobile-single-page/index', 'view' => 'customizing']); ?>">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/mobile/images/58340be33e8c8.jpg" alt=""></a>
            </div>
            <div class="swiper-slide">
                <a href="<?= Url::to(['/cmsad/mobile-single-page/index', 'view' => 'customizing']); ?>">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/mobile/images/mobile-banner21.png" alt=""></a>
            </div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
    </div>
</div>
