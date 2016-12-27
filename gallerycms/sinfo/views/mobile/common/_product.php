<?php
use yii\helpers\Url;
?>
<div class="m-part conmmon-part vone-part zyy-s-nav">
    <h2>我们的服务</h2>
    <div class="m-con">
        <div class="zyy-nav-inner clearfix">
            <div class='nav-item' id="newz">
                <a href="<?= Url::to(['/cmsad/mobile-single-page/index', 'view' => 'sem']); ?>">
                    <span><em><img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/mobile/images/zyy-nav-icon1.png" alt=""></em>SEM托管</span>
                </a>
            </div>
            <div class='nav-item' id="zmobile">
                <a href="<?= Url::to(['/cmsad/mobile-single-page/index', 'view' => 'seo']); ?>">
                    <span><em><img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/mobile/images/zyy-nav-icon2.png" alt=""></em>SEO顾问</span>
                </a>
            </div>
            <div class='nav-item' id="zshop">
                <a href="<?= Url::to(['/cmsad/mobile-single-page/index', 'view' => 'customizing']); ?>">
                    <span><em><img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/mobile/images/zyy-nav-icon3.png" alt=""></em>企业定制</span>
                </a>
            </div>
            <div class='nav-item' id="ztouch">
                <a href="<?= Url::to(['/cmsad/mobile-single-page/index', 'view' => 'customizing']); ?>">
                    <span><em><img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/mobile/images/zyy-nav-icon4.png" alt=""></em>网站制作</span>
                </a>
            </div>
            <div class='nav-item' id="kexinwangzhan">
                <a href="<?= Url::to(['/cmsad/mobile-single-page/index', 'view' => 'customizing']); ?>">
                    <span><em><img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/mobile/images/zyy-nav-icon10.png" alt=""></em>舆情监控</span>
                </a>
            </div>
            <div class='nav-item' id="vone">
                <a href="<?= Url::to(['/cmsad/mobile-single-page/index', 'view' => 'customizing']); ?>">
                    <span><em><img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/mobile/images/zyy-nav-icon5.png" alt=""></em>新闻营销</span>
                </a>
            </div>
        </div>
    </div>
</div>
