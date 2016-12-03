<?php 
use yii\helpers\Url;
?>
<div class="jz-service conmmon-part" id='page2'>
    <h2><span>我们的服务</span><!--<a href="">More</a>--></h2>
    <ul class="clearfix">
        <li>
            <a href="<?= Url::to(['/cmsad/mobile-single-page/index', 'view' => 'sem']); ?>">
                <div class="img">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/mobile/images/part2-img1.png" alt=""></div>
                <p>SEM托管</p>
            </a>
        </li>
        <li>
            <a href="<?= Url::to(['/cmsad/mobile-single-page/index', 'view' => 'seo']); ?>">
                <div class="img">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/mobile/images/part2-img2.png" alt=""></div>
                <p>SEO顾问</p>
            </a>
        </li>
        <li>
            <a href="<?= Url::to(['/cmsad/mobile-single-page/index', 'view' => 'customizing']); ?>">
                <div class="img">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/mobile/images/part2-img3.png" alt=""></div>
                <p>企业定制</p>
            </a>
        </li>
        <li>
            <a href="<?= Url::to(['/cmsad/mobile-single-page/index', 'view' => 'customizing']); ?>">
                <div class="img">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/mobile/images/part2-img4.png" alt=""></div>
                <p>网站制作</p>
            </a>
        </li>
        <li>
            <a href="<?= Url::to(['/cmsad/mobile-single-page/index', 'view' => 'customizing']); ?>">
                <div class="img">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/mobile/images/part2-img5.png" alt=""></div>
                <p>舆情监控</p>
            </a>
        </li>
        <li>
            <a href="<?= Url::to(['/cmsad/mobile-single-page/index', 'view' => 'customizing']); ?>">
                <div class="img">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/mobile/images/part2-img7.png" alt=""></div>
                <p>新闻营销</p>
            </a>
        </li>
    </ul>
</div>
