<?php
use yii\helpers\Url;
?>
<section class="nav">
    <header>
        <div class="logo">
            <a href="/"><img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/mobile/images/logo.png" alt=""></a>
        </div>
        <div class="close"><a href="javascript:;"></a></div>
    </header>
    <nav>
        <ul>
            <li><a href="/">首页</a></li>
            <li><a href="<?= Url::to(['/cmsad/mobile-single-page/index', 'view' => 'sem']); ?>">SEM托管</a></li>
            <li><a href="<?= Url::to(['/cmsad/mobile-single-page/index', 'view' => 'seo']); ?>">SEO顾问</a></li>
            <li><a href="<?= Url::to(['/cmsad/mobile-single-page/index', 'view' => 'customizing']); ?>">企业定制</a></li>
            <!--<li><a href="<?= Url::to(['/cmsad/mobile-sample/index', 'page' => 1]); ?>">成功案例</a></li>-->
            <li><a href="<?= Url::to(['/cmsad/mobile-info/index', 'tag' => '', 'page' => 1]); ?>">营销学院</a></li>
            <li><a href="<?= Url::to(['/cmsad/mobile-aboutus/index', 'view' => 'index']); ?>">关于我们</a></li>
        </ul>
    </nav>
</section>
