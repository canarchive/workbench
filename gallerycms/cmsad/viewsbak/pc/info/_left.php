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
				<a href="<?= Url::to(['/cmsad/info/index', 'tag' => '_' . $info['catdir'], 'page' => '_1']); ?>" <?php if ($id == $info['id']) { echo 'class="active"'; } ?> title="<?= $info['name']; ?>"><?= $info['name']; ?></a>
                <ul style=""></ul>
            </li>
            <?php } ?>
        </ul>
    </div>
    <div class="ad-con ad-con2">
        <a rel="nofollow" href="<?= Url::to(['/cmsad/single-page/index', 'view' => 'sem']); ?>" title="SEM推广">
            <h2>
                <span>SEM推广</span>
                <i></i>
            </h2>
            <div class="ad-img">
                <img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/pc/img/about-ad-img2.jpg" alt="SEM推广"></div>
            <p><?= Yii::$app->params['siteNameBase']; ?>服务过120万客户</p>
        </a>
    </div>
    <div class="ad-con ad-con3">
        <a rel="nofollow" href="<?= Url::to(['/cmsad/single-page/index', 'view' => 'seo']); ?>" title="SEO顾问">
            <h2>SEO顾问</h2>
            <div class="ad-img"><img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/pc/img/about-ad-img3.jpg" alt="SEO顾问"></div>
            <p><?= Yii::$app->params['siteNameBase']; ?>，只拿网站宣传效果说话</p>
        </a>
    </div>
</div>
