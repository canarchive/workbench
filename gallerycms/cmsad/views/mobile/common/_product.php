<?php
use yii\helpers\Url;
?>
<div class="m-part conmmon-part vone-part zyy-s-nav">
    <h2>我们的服务</h2>
    <div class="m-con">
        <div class="zyy-nav-inner clearfix">
            <div class='nav-item' id="newz">
                <a href="<?= Url::to(['/cmsad/mobile-single-page/index', 'view' => 'sem']); ?>" title="SEM托管">
                    <span><em><img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/mobile/images/zyy-nav-icon1.png" alt="SEM托管"></em>SEM托管</span>
                </a>
            </div>
            <div class='nav-item' id="zmobile">
                <a href="<?= Url::to(['/cmsad/mobile-single-page/index', 'view' => 'seo']); ?>" title="SEO顾问">
                    <span><em><img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/mobile/images/zyy-nav-icon2.png" alt="SEM托管"></em>SEO顾问</span>
                </a>
            </div>
            <div class='nav-item' id="zshop">
                <a href="<?= Url::to(['/cmsad/mobile-single-page/index', 'view' => 'customizing']); ?>" title="企业定制">
                    <span><em><img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/mobile/images/zyy-nav-icon3.png" alt="企业定制"></em>企业定制</span>
                </a>
            </div>
            <div class='nav-item' id="ztouch">
                <a href="<?= Url::to(['/cmsad/mobile-single-page/index', 'view' => 'customizing']); ?>" title="网站制作">
                    <span><em><img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/mobile/images/zyy-nav-icon4.png" alt="网站制作"></em>网站制作</span>
                </a>
            </div>
            <div class='nav-item' id="kexinwangzhan">
                <a href="<?= Url::to(['/cmsad/mobile-single-page/index', 'view' => 'customizing']); ?>" title="舆情监控">
                    <span><em><img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/mobile/images/zyy-nav-icon10.png" alt="舆情监控"></em>舆情监控</span>
                </a>
            </div>
            <div class='nav-item' id="vone">
                <a href="<?= Url::to(['/cmsad/mobile-single-page/index', 'view' => 'customizing']); ?>" title="新闻营销">
                    <span><em><img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/mobile/images/zyy-nav-icon5.png" alt="新闻营销"></em>新闻营销</span>
                </a>
            </div>
        </div>
    </div>
</div>
