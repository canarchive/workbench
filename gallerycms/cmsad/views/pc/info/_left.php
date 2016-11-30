<?php
use yii\helpers\Url;
?>
<div class="zq-left floatL">
    <div class="zq-menu floatL">
        <ul>
            <li class="t">营销学院</li>
            <?php foreach ($cInfos as $info) { ?>
            <li></li>
            <li class="m1">
                <a href="<?= Url::to(['/cmsad/info/index', 'tag' => $info['catdir'], 'page' => 1]); ?>" <?php if ($id == $info['id']) { echo 'class="active"'; } ?>><?= $info['name']; ?></a>
                <ul style=""></ul>
            </li>
            <?php } ?>
        </ul>
    </div>
    <div class="ad-con ad-con1">
        <a href="<?= Url::to(['/cmsad/sample/index', 'page' => 1]); ?>" target="_blank">
            <h2>经典案例</h2>
            <div class="ad-img">
                <img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/pc/img/about-ad-img1.jpg" alt=""></div>
            <p>看经典案例，放心建网站</p>
        </a>
    </div>
    <div class="ad-con ad-con2">
        <a href="<?= Url::to(['/cmsad/single-page/index', 'view' => 'sem']); ?>" target="_blank">
            <h2>
                <span>SEM推广</span>
                <i></i>
            </h2>
            <div class="ad-img">
                <img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/pc/img/about-ad-img2.jpg" alt=""></div>
            <p>中企动力服务过120万客户</p>
        </a>
    </div>
    <div class="ad-con ad-con3">
        <a href="<?= Url::to(['/cmsad/single-page/index', 'view' => 'seo']); ?>" target="_blank">
            <h2>SEO顾问</h2>
            <div class="ad-img"><img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/pc/img/about-ad-img3.jpg" alt=""></div>
            <p>中企动力，只拿网站宣传效果说话</p>
        </a>
    </div>
</div>
